<template>
<div>
    <layout-header/>
    <venujteNamDve/>
    <naDarovanie/>
    <layout-footer/>
</div>
</template>
<script>
export default {
    components: {
        'layout-header': () => import('../layout/layout-header.vue'),
        'venujteNamDve': () => import('../reusables/reusables-2percent/venujteNamDveSection/r-venujteNamDve.vue'),
        'naDarovanie': () => import('../reusables/reusables-2percent/naDarovanieSection/r-naDarovanie.vue'),
        'layout-footer': () => import('../layout/layout-footer.vue'),
    }
        
}
</script>