<template>
    
    <router-view></router-view>
</template>

<script setup>

</script>

<style>
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

:root{
    --color-bkg: #2a2b2e;
}

</style>