import * as THREE from 'three';
import { AsciiEffect } from 'three/addons/effects/AsciiEffect.js';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';

const container = document.getElementById('container');
const heroSection = container.parentElement;

const scene = new THREE.Scene();

// Get container dimensions
const containerWidth = heroSection.offsetWidth;
const containerHeight = heroSection.offsetHeight;

const camera = new THREE.PerspectiveCamera(60, containerWidth / containerHeight, 0.1, 100);

// Ajuster la position selon la largeur de l'écran
function updateCameraPosition() {
    const screenWidth = window.innerWidth;
    if (screenWidth <= 1024) {
        // Petits laptops
        camera.position.z = 10;
        camera.position.x = -3.3;
    } else if (screenWidth <= 1440) {
        // Laptops moyens
        camera.position.z = 8;
        camera.position.x = -3.3;
    } else {
        // Grands écrans
        camera.position.z = 6;
        camera.position.x = -3;
    }
}

updateCameraPosition();

const renderer = new THREE.WebGLRenderer();
renderer.setSize(containerWidth, containerHeight);

const effect = new AsciiEffect(renderer, ' .:-+*=%@#', { invert: true });
effect.setSize(containerWidth, containerHeight);

// Styles pour éviter le scroll horizontal
effect.domElement.style.color = 'white';
effect.domElement.style.backgroundColor = 'black';
effect.domElement.style.position = 'absolute';
effect.domElement.style.top = '0';
effect.domElement.style.left = '0';
effect.domElement.style.margin = '0';
effect.domElement.style.padding = '0';
effect.domElement.style.zIndex = '-1';
effect.domElement.style.overflow = 'hidden'; // Prevent scrollbars
effect.domElement.style.width = '100vw';
effect.domElement.style.height = '100vh';

// Éviter le scroll horizontal sur l'élément <pre> interne
const preElement = effect.domElement.querySelector('pre');
if (preElement) {
    preElement.style.margin = '0';
    preElement.style.padding = '0';
    preElement.style.overflow = 'hidden';
    preElement.style.whiteSpace = 'pre';
    preElement.style.width = '100%';
    preElement.style.height = '100%';
}

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

let cycleDuration = 8000;
function animate() {
    requestAnimationFrame(animate);

    let elapsed = Date.now() % cycleDuration;
    let progress = elapsed / cycleDuration;
    let swing = Math.sin(progress * Math.PI * 2) * 0.3;

    if (model) {
        model.rotation.y = swing;
    }
    effect.render(scene, camera);
}

animate();

window.addEventListener('resize', () => {
    const containerWidth = heroSection.offsetWidth;
    const containerHeight = heroSection.offsetHeight;

    camera.aspect = containerWidth / containerHeight;
    camera.updateProjectionMatrix();
    updateCameraPosition(); // Mettre à jour la position de la caméra
    renderer.setSize(containerWidth, containerHeight);
    effect.setSize(containerWidth, containerHeight);

    // Re-apply styles to pre element after resize
    const preElement = effect.domElement.querySelector('pre');
    if (preElement) {
        preElement.style.overflow = 'hidden';
        preElement.style.width = '100%';
        preElement.style.height = '100%';
    }
});