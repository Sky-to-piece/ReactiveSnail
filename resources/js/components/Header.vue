<template>
    <nav>
        <div>
            <div class="navigation-header">
                <ul>
                    <li><a href="/"             class="item-header">ГЛАВНАЯ</a></li>
                    <li><a href="/driver"       class="item-header">ВОДИТЕЛЬ</a></li>
                    <li><a href="/transport"    class="item-header">ТРАНСПОРТ</a></li>
                    <li><a href="/relation"     class="item-header">ОТНОШЕНИЕ</a></li>
                </ul>
            </div>
            <div class="auth-and-reg-bt"> <!-- Authorization and registration buttons -->

            </div>
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
