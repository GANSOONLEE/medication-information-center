
<script setup>
import { ref } from 'vue';

const activeClass = ref('rounded text-primary-700');
const inactiveClass = ref('border-b lg:border-0 hover:text-gray-400 text-white');

defineProps(['currentPage', 'href', 'label']);
</script>

<template>
    
    <li>
        <a
            :href="href"
            class="block py-2 pr-4 pl-3 lg:p-0"
            :class="[currentPage ? activeClass : inactiveClass]"
            aria-current="page"
        >
            {{ label }}
        </a>
    </li>

</template>