<template>
   <div class="`alert ${data.class} my-2`">
        {{ data.message }}

   </div>
</template>
<script setup>
    import { reactive } from 'vue';

    const data = reactive({
        message: 'Sohan has logged in',
        class: 'alert-success',
        show: false
    });


</script>
<style>

</style>
