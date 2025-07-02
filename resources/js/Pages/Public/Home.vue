<template>
  <div>
    🍊 Welcome to Theme Fruits! App: {{ appName }}
  </div>
</template>

<script setup>
  defineProps({ appName: String });
</script>