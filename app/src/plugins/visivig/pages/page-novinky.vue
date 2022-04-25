<template>
<div>
    <layout-header/>
    <r-novinky-z-op/>
    <layout-footer/>
</div>
</template>
<script>
export default {
    components: {
        'layout-header': () => import('@/plugins/visivig/layout/layout-header.vue'),
        'r-novinky-z-op': () => import('@/plugins/visivig/reusables/reusables-novinky/novinkyZOPSection/r-novinkyZOP.vue'),
        'layout-footer': () => import('@/plugins/visivig/layout/layout-footer.vue'),
    }
        
}
</script>