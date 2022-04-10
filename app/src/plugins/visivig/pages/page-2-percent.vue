<template>
<div>
    <layout-header/>
    <r-venujte-nam-dve/>
    <r-na-darovanie/>
    <layout-footer/>
</div>
</template>
<script>
export default {
    components: {
        'layout-header': () => import('@/plugins/visivig/layout/layout-header.vue'),
        'r-venujte-nam-dve': () => import('@/plugins/visivig/reusables/reusables-2percent/venujteNamDveSection/r-venujteNamDve.vue'),
        'r-na-darovanie': () => import('@/plugins/visivig/reusables/reusables-2percent/naDarovanieSection/r-naDarovanie.vue'),
        'layout-footer': () => import('@/plugins/visivig//layout/layout-footer.vue'),
    }
        
}
</script>