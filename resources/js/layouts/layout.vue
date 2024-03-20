<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <Link href="/">Home</Link>
        <Link href="/contact">Contact</Link>
        <Link href="/about">About</Link>
    </div>
    <slot />
    <div></div>
</template>
