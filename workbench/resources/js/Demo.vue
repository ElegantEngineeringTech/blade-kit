<script setup lang="ts">
import { Placeholder } from "@/index";
</script>

<template>
    <div class="p-10">
        <h1 class="text-3xl font-bold mb-6">Vue Components Demo</h1>

        <div class="space-y-6">
            <section>
                <h2 class="text-xl font-semibold mb-4">Placeholder Component</h2>
                <Placeholder label="Testing from Workbench" />
            </section>
        </div>
    </div>
</template>
