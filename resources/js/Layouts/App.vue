<template>
    <header class="sticky top-0 z-40 bg-white shadow-sm print:hidden">
        <app-header
            :navigation-controller="navigationController"
            :hasAccount="true"
        />
    </header>

    <div class="mx-auto flex max-w-6xl">
        <nav
            class="-mt-10 min-h-screen flex-shrink-0 flex-grow-0 bg-white pt-10 print:hidden md:-mt-20 md:pt-20"
        >
            <app-navigation :navigation="navigation" />
        </nav>

        <main
            class="flex-shrink flex-grow space-y-2 overflow-auto px-2 py-2 md:px-4 md:py-4"
        >
            <div class="flex items-end justify-between gap-1.5 print:hidden">
                <h2
                    v-if="pageTitle"
                    class="flex-shrink flex-grow text-xl font-bold leading-5 text-gray-700"
                >
                    {{ pageTitle }}
                </h2>
                <Link
                    v-if="addNewHref"
                    :href="addNewHref"
                    class="flex flex-shrink-0 flex-grow-0 items-center justify-center gap-1 rounded bg-green-600 px-2.5 py-0.5 text-white"
                >
                    <span>+</span>
                    <span class="hidden md:block">নতুন যোগ করুন</span>
                </Link>
            </div>

            <slot />
        </main>
    </div>

    <!-- <footer>
        <app-footer />
    </footer> -->
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import AppFooter from "./Footer/Index.vue";
import AppHeader from "./Header/Index.vue";
import AppNavigation from "./Navigation/Index.vue";

export default {
    components: {
        Link,
        AppFooter,
        AppHeader,
        AppNavigation,
    },
    props: ["pageTitle", "addNewHref"],
    data() {
        return {
            navigation: false,
        };
    },
    methods: {
        navigationController() {
            this.navigation = !this.navigation;
        },
    },
};
</script>
