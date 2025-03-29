<template>
    
    <router-view></router-view>
</template>

<script setup>

</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Epilogue:ital,wght@0,100..900;1,100..900&family=Kode+Mono:wght@400..700&display=swap');

* {
    box-sizing: border-box;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-kerning: auto;
}
*::before,
*::after{
    box-sizing: border-box;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    overflow-x: hidden;
}
body {
    margin: 0;
    position: relative;
    background-color: var(--color-bkg);
}
html, body{
    height: 100%;
}
button{
    font-family: var(--font-family-kode-mono);
    cursor: pointer;
}
input{
    background-color: var(--color-bkg-input);
    padding: var(--padding-input);
    font-family: var(--font-family-kode-mono);
    font-size: var(--font-size-p);
    color: var(--color-text-in-white-bkg);
}
input[type="submit"]{
    background-color: var(--color-cta);
    cursor: pointer;
    color: var(--color-text-in-white-bkg);
}
input[type="checkbox"]{
    width: fit-content;
}
label{
    font-family: var(--font-family-kode-mono);
    font-size: var(--font-size-p);
}
h1{
    font-family: var(--font-family-chakra-petch);
    font-weight: var(--font-weight-h1);
    font-size: var(--font-size-h1);
}
h2{
    font-family: var(--font-family-chakra-petch);
    font-weight: var(--font-weight-h2);
    font-size: var(--font-size-h2);
}
p{
    font-family: var(--font-family-kode-mono);
    font-weight: var(--font-weight-p);
    font-size: var(--font-size-p);
}

/*------------------------------------*
*-------------------------------------*
* TRANSITIONS
*-------------------------------------* 
*-------------------------------------*/
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.2s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

:root{
    --padding-website-inline: clamp(0.6rem, 0.7vw, 1rem);
    --padding-nav-block: clamp(0.6rem, 1vw, 1rem);
    --padding-input: clamp(0.2rem, 0.5vw, 0.8rem) clamp(0.3rem, 0.7vw, 1rem) clamp(0.2rem, 0.5vw, 0.8rem) clamp(0.3rem, 0.7vw, 1rem); 
    --padding-login: clamp(0.5rem, 2vw, 2rem);

    --color-cta: #F0D845;
    --color-bkg: #2a2b2e;
    --color-text: #FFFFFF;
    --color-text-in-white-bkg: #000000;
    --color-nav: #444444;
    --color-bkg-modal: rgba(0, 0, 0, 0.5);
    --color-bkg-login: rgb(14, 14, 14);
    --color-bkg-input: #FFFFFF;
    --color-text-input: #000000;

    --gap-form: clamp(0.4rem, 0.5vw, 1rem);

    --border-general: 2px solid #444444;

    --font-size-h1: clamp(2.5rem, 5.5vw, 6.25rem);
    --font-size-h2: clamp(2rem, 3vw, 3rem);
    --font-size-p: clamp(1rem, 1vw, 1rem);

    --font-weight-h1: 700;

    --font-family-chakra-petch: "Chakra Petch", sans-serif; 
    --font-family-epilogue: "Epilogue", sans-serif; 
    --font-family-kode-mono: "Kode Mono", monospace; 
}

</style>