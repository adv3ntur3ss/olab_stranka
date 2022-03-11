<template>
<div>
    <layout-header/>
    <imagesPredDakujeme/>
    <dakujemeZaPodporu/>
    <newsletter/>
    <layout-footer/>

</div>
</template>
<script>
export default {
    components: {
        'layout-header': () => import('../layout/layout-header.vue'),
        'layout-footer': () => import('../layout/layout-footer.vue'),
        'dakujemeZaPodporu': () => import('../reusables/reusables-universal/dakujemeZaPodporuSection/r-dakujemeZaPodporu.vue'),
        'imagesPredDakujeme': () => import('../reusables/reusables-universal/imagesPredDakujemeSection/imagesPredDakujeme.vue'),
        'newsletter': () => import('../reusables/reusables-universal/newsletterSection/newsletter.vue')
    }
        
}
</script>