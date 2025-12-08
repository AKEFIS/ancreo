<?php

// Webhook Discord
$webhookUrl = 'https://discord.com/api/webhooks/1422502395065405451/VxZQHWmis8YWhdO_-9YESLTU7TzlVRVBRJ4Iw15pKIbwmLgWK7AOYSdaf1y_52zD_sAg';

// Helper pour renvoyer une réponse JSON et terminer le script
function send_json_response(array $payload, int $httpCode = 200): void
{
  http_response_code($httpCode);
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($payload);
  exit;
}

// Récupérer et sécuriser les champs POST
$nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
$objet = isset($_POST['objet']) ? trim($_POST['objet']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validation: tous les champs obligatoires
$required = [
  'nom' => 'Le Nom est requis',
  'email' => "L'adresse Mail est requis",
  'telephone' => 'Le numéro de Téléphone est requis',
  'objet' => "L'Objet du message est requis",
  'message' => 'Le Message est requis',
];
$missing = [];
foreach ($required as $key => $label) {
  if (empty($$key)) {
    $missing[] = $label;
  }
}

if (!empty($missing)) {
  http_response_code(400);
  $errors = [];
  foreach ($missing as $label) {
    // essayer de retrouver la clé depuis le label
    $key = array_search($label, $required);
    $errors[$key !== false ? $key : $label] = $label;
  }
  send_json_response(['success' => false, 'message' => 'Champs requis manquants.', 'errors' => $errors], 400);
}

// Nettoyage simple pour l'embed (éviter les caractères problématiques)
$nom = htmlspecialchars($nom, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$telephone = htmlspecialchars($telephone, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$objet = htmlspecialchars($objet, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

// Validation de l'email
// Utilise filter_var pour une vérification de base
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  send_json_response(['success' => false, 'message' => 'Email invalide.', 'errors' => ['email' => 'Email invalide.']], 400);
}

// Validation du téléphone (format Français commun)
// Accepte : +33 6 12 34 56 78, 06 12 34 56 78, 0612345678, etc.
if ($telephone !== '') {
  // Normaliser : supprimer espaces, points, tirets et le +
  $normalizedPhone = preg_replace('/[\s\.\-\+]/', '', $telephone);

  // Vérifier que ne reste que des chiffres
  if (!preg_match('/^[0-9]+$/', $normalizedPhone)) {
    send_json_response(['success' => false, 'message' => 'Téléphone invalide.', 'errors' => ['telephone' => 'Téléphone invalide.']], 400);
  }

  // Valider formats : 0XXXXXXXXX (10 chiffres) ou 33XXXXXXXXX (11 chiffres après suppression du +)
  $normalizedPattern = '/^(?:0|33)[1-9][0-9]{8}$/';
  if (!preg_match($normalizedPattern, $normalizedPhone)) {
    send_json_response(['success' => false, 'message' => 'Téléphone invalide.', 'errors' => ['telephone' => 'Téléphone invalide.']], 400);
  }
}

// Construire l'embed comme en JS
$embed = [
  'title' => 'Nouveau message de contact',
  'color' => 3447003,
  'fields' => [
    [
      'name' => 'Nom et prénom',
      'value' => $nom !== '' ? $nom : '—',
      'inline' => true,
    ],
    [
      'name' => 'Email',
      'value' => $email,
      'inline' => true,
    ],
    [
      'name' => 'Téléphone',
      'value' => $telephone !== '' ? $telephone : '—',
      'inline' => true,
    ],
    [
      'name' => 'Objet',
      'value' => $objet,
      'inline' => true,
    ],
    [
      'name' => 'Message',
      'value' => $message,
      'inline' => false,
    ],
  ],
  'timestamp' => gmdate('Y-m-d\TH:i:s\Z'),
  'footer' => [
    'text' => 'Formulaire de contact',
  ],
];

// Payload final
$payload = json_encode(['embeds' => [$embed]]);

// Préparer et envoyer la requête POST vers Discord
$ch = curl_init($webhookUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlErr = curl_error($ch);
curl_close($ch);

// Gérer la réponse
if ($response === false) {
  error_log("cURL error when sending to Discord webhook: $curlErr");
  send_json_response(['success' => false, 'message' => 'Erreur lors de l\'envoi du message.', 'errors' => []], 500);
}

if ($httpCode >= 200 && $httpCode < 300) {
  send_json_response(['success' => true, 'message' => 'Message envoyé avec succès.', 'errors' => []], 200);
} else {
  error_log("Discord webhook returned HTTP $httpCode. Response: $response");
  send_json_response(['success' => false, 'message' => 'Erreur lors de l\'envoi du message.', 'errors' => []], 500);
}
