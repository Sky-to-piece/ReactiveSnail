<template>
    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-center">

            <ul class="uk-navbar-nav">
                <!--                class="uk-active"-->
                <li v-for="link in links">
                    <router-link :to="link.href">{{ link.title }}</router-link>
                </li>
            </ul>

        </div>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            links: [
                {
                    title: "MAIN", href: "/"
                },
                {
                    title: "DRIVER", href: "/driver"
                },
                {
                    title: "TRANSPORT", href: "/transport"
                }
            ]
        }
    }
}
</script>

<style scoped>
</style>
