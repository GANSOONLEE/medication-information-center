
<script>

const features =  [
    {
        'title': '藥物資料庫',
        'description': '存取藥物資訊的集中儲存庫，包括劑量、適應症、禁忌症和可能的副作用的詳細資訊。',
    },
    {
        'title': '使用者友善的介面',
        'description': '透過直覺且易於使用的介面輕鬆瀏覽系統，確保醫療保健專業人員可以有效地檢索和更新用藥記錄。',
    },
    {
        'title': '庫存管理',
        'description': '可以追蹤您的藥物儲備，并且可以設置警報閾值來提醒您的藥物。',
    },
    {
        'title': '個人病史',
        'description': '系統會根據您事前輸入的病史，過敏史來計算和判斷哪些藥物可能會對您有副作用。',
    },
    {
        'title': '服藥計算',
        'description': '對於經常要大量服用不同種類藥物的人，系統會通過數學模型計算，讓使用者可以合理分配服藥時間和避免藥物之間產生交互作用。',
    },
    {
        'title': '醫療數據',
        'description': '使用者可以將使用藥物史記錄起來，并通過電郵或列印文檔的形式來發送給您的醫生，讓其可以更快的對使用者的情況做出反應。',
    },
];

export default {
    name: 'featureItem',
    data() {
        return {
            features,
        }
    }
}

</script>

<template>

    <!-- Feature Description 功能描述 -->
    <div v-for="feature in features">
        <div
            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>

        <h3 class="mb-2 text-xl font-bold dark:text-white">{{ feature.title }}</h3>

        <p class="text-gray-500 dark:text-gray-400">
            {{ feature.description }}
        </p>
    </div>

</template>