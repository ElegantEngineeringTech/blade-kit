<script setup lang="ts">
import { Button } from '@/index';
</script>

<template>
    <div class="grid grid-cols-1 divide-x divide-gray-200 *:h-60 md:grid-cols-3">

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Button</h1>
            </div>
            <div class="flex grow items-center justify-center gap-2 border-b border-gray-200">
                <Button color="rose" class="rounded-md ring-1 ring-inset">
                    Button
                    <template v-slot:icon-right>
                        <iconify-icon icon="heroicons:check"></iconify-icon>
                    </template>
                </Button>

                <Button color="rose-light" class="rounded-md ring-1 ring-inset">
                    Button
                </Button>

            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Loading button</h1>
            </div>
            <div class="flex grow items-center justify-center gap-2 border-b border-gray-200">

                <Button color="white" class="rounded-md ring-1 ring-inset" data-loading>
                    Button
                </Button>

                <Button color="sky-light" class="el-loading rounded-md ring-1 ring-inset">
                    Button
                </Button>

                <Button color="sky-light" class="rounded-md ring-1 ring-inset" loading>
                    Button
                </Button>

            </div>
        </div>

        <div class="isolate flex flex-col">
            <div class="p-3">
                <h1 class="font-semibold">Button File</h1>
            </div>
            <div class="flex grow items-center justify-center border-b border-gray-200">
                <Button color="white" class="rounded-md ring-1 ring-inset">
                    <template v-slot:input>
                        <input type="file" multiple name="upload" />
                    </template>

                    <template v-slot:icon>
                        <iconify-icon icon="heroicons:arrow-up-tray"></iconify-icon>
                    </template>
                    Select a file
                </Button>
            </div>
        </div>

    </div>
</template>
