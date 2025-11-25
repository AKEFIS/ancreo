import * as THREE from 'three';
import { AsciiEffect } from 'three/addons/effects/AsciiEffect.js'; 
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';

const container = document.getElementById('container');

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 100);
camera.position.z = 7;
camera.position.x = -2;

const renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);

const effect = new AsciiEffect(renderer, ' .:-+*=%@#', { invert: true });
effect.setSize(window.innerWidth, window.innerHeight);
effect.domElement.style.color = 'white';
effect.domElement.style.backgroundColor = 'black';
effect.domElement.style.position = 'fixed';
effect.domElement.style.top = '0';
effect.domElement.style.left = '0';
effect.domElement.style.margin = '0';
effect.domElement.style.padding = '0';
effect.domElement.style.zIndex = '-1';
container.appendChild(effect.domElement);

const light = new THREE.DirectionalLight(0xffffff, 1);
light.position.set(5, 5, 5).normalize();
scene.add(light);

const loader = new GLTFLoader();
let model = null;

loader.load('./src/js/ancre/scene.gltf', (gltf) => {
    model = gltf.scene;
    model.scale.set(1, 1, 1);
    model.position.set(0, 0, 0);
    scene.add(model);
}, (xhr) => {
          console.log(`Chargement : ${((xhr.loaded / xhr.total) * 100).toFixed(1)}%`);
        },
        (error) => {
          console.error('Erreur de chargement glTF :', error);
        })

let cycleDuration = 8000; // 4 secondes pour un cycle complet
function animate() {
    requestAnimationFrame(animate);

    let elapsed = Date.now() % cycleDuration;
    let progress = elapsed / cycleDuration; // 0 à 1
    
    // Utilise Math.sin pour créer un mouvement de balancement fluide
    // Sin crée une courbe : 0 -> 1 -> 0 -> -1 -> 0
    let swing = Math.sin(progress * Math.PI * 2) * 0.3; // Entre -0.5 et 0.5

    if (model) {
        model.rotation.y = swing; // Balancement doux d'un côté à l'autre
    }
    effect.render(scene, camera);
}

animate();

window.addEventListener('resize', () => {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
    effect.setSize(window.innerWidth, window.innerHeight);
});