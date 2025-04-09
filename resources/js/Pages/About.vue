<script setup>
defineProps(["name", "age", "location", "is_admin"]);
</script>

<template>
    <div>
        <h2 class="text-3xl text-center">
            About Page {{ name }} <br />
            {{ age }} <br />
            {{ location }} <br />
            {{ is_admin }}
        </h2>
    </div>
</template>
