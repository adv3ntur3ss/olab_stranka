<template>
<div>
    <layout-header/>
    <vOpenLabeSpajame/>
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
        'imagesPredDakujeme': () => import('../reusables/reusables-universal/imagesPredDakujemeSection/r-imagesPredDakujeme.vue'),
        'dakujemeZaPodporu': () => import('../reusables/reusables-universal/dakujemeZaPodporuSection/r-dakujemeZaPodporu.vue'),
        'newsletter': () => import('../reusables/reusables-universal/newsletterSection/r-newsletter.vue'),
        'vOpenLabeSpajame': () => import('../reusables/reusables-nasTim/vOpenLabeSpajameSection/r-vOpenLabeSpajame.vue')
    }
        
}
</script>