<template>
    <nav>
        <div class="navigation-header">
            <TABLE class="head-table">
                <tr>
                    <th>
                        <table class="head-table">
                            <tr>
                                <td></td>
                                <td>
                                    <a href="/"             class="item-header">ГЛАВНАЯ</a>
                                    <a href="/driver"       class="item-header">ВОДИТЕЛЬ</a>
                                    <a href="/transport"    class="item-header">ТРАНСПОРТ</a>
                                    <a href="/relation"     class="item-header">ОТНОШЕНИЕ</a>
                                </td>
                                <td>
                                    <a href="/registration"     class="item-authentication">регистрация</a>
                                    <a href="/authorization"    class="item-authentication">авторизация</a>
                                </td>
                            </tr>
                        </table>
                    </th>
                </tr>
            </TABLE>
        </div>
    </nav>
</template>

<script>
export default {
}
</script>

<style scoped>
.navigation-header{
    background: #2d3748;    /*цвет фона шапки*/
    padding: 1rem 0;        /*высота шапки*/
}
.item-header {
    text-decoration: none;  /*убрать подчеркивание*/
    color: #718096;         /*цвет текста*/
    margin-left: 2%;        /*отступ между ячейками*/
    font-weight: normal;    /*форматировани*/
}
.item-authentication {
    text-decoration: none;  /*убрать подчеркивание*/
    color: #718096;         /*цвет текста*/
    margin-left: 5%;        /*отступ между ячейками*/
    font-weight: normal;    /*форматировани*/
}
.head-table{
    width:100%;
}
</style>
