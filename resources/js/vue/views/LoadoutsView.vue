<template>
    <Navigation/>
    <Header title="BUILD YOUR LOADOUTS"/>

    <section>
        <form @submit.prevent="handleLoadout" class="loadout-form">
            <div class="title-container">
                <input type="text" class="name" id="name" name="name" placeholder="Enter your SUPER loadout name" v-model="name">
            </div>

            <div class="flex-row">
                <div class="stratagem-container">
                    <input @click="stratagems = !stratagems" class="stratagem" type="button" title="Stratagem 1">
                    <input class="stratagem" type="button" title="Stratagem 2">
                    <input class="stratagem" type="button" title="Stratagem 3">
                    <input class="stratagem" type="button" title="Stratagem 4">
                </div>

                <div class="stratagem-list">
                    
                </div>
            </div>
            
        </form>
    </section>

</template>

<script setup>
import Navigation from '@/js/vue/components/general/Navigation.vue';
import Header from '@/js/vue/components/general/Header.vue';

import { ref } from 'vue'

const name = ref(null);

const stratagems = ref(null);

</script>

<style scoped>
.loadout-form{
    padding: var(--padding-input);
    display: flex;
    flex-direction: column;
    gap: var(--gap-general);
}
.title-container{
    display: flex;
    flex-direction: column;
}
input{
    background-color: transparent;
    border-bottom: var(--border-input-bottom);
}
input.name{
    font-family: var(--font-family-epilogue);
    font-weight: var(--font-weight-h4);
    font-size: var(--font-size-h4);
    padding-bottom: 0px;
    color: var(--color-text);
}

/*
 *
 * STRATAGEMS
 *
 */
.stratagem-container{
    display: flex;
    gap: var(--gap-general);
}
.stratagem{
    width: var(--w-stratagem);
    height: var(--h-stratagem);
    border: var(--border-general);
}
</style>