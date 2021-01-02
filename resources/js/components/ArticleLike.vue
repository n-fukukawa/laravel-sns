<template>
    <div>
        <button type="button" class="p-1">
            <i class="fas fa-heart text-gray-500 mr-0.5"
               :class="{ 'text-red-500' :this.isLikedBy }"
            />
        </button>
        {{ countLikes }}
    </div>
</template>

<script>
export default{
    props: {
        initialIsLikedBy: {
            type: Boolean,
            default: false,
        },
        initialCountLikes: {
            type: Number,
            default: 0,
        }
    },
    data() {
        return {
            isLikedBy: this.initialIsLikedBy,
            countLikes: this.initialCountLikes,
        }
    }
}
</script>