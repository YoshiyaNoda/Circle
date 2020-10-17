<template>
    <div id="topContainer">
        <div class="container">
            <h1 class="title">ようこそ、慶應アプリケーション制作サークルへ！！</h1>
            <div class="paragraphContainer">
                <h2>とりあえず、プログラミングやりたい人 Come on in!!</h2>
                <p>プログラミングがやりたくて挫折した人、<router-link to="contact">とりあえず連絡して</router-link>ください。そんなあなたの為に作ったサークルです。お金を取られるだとかの心配は無用です。ただの有志の慈善活動です。</p>
            </div>
            <div class="paragraphContainer">
                <h2>なんのサークル?</h2>
                <p>このサークルは、慶應義塾大学学生を中心に様々な大学の学生達が立ち上げた唯一の<b>Webサービス開発に特化したサークル</b>です。</p>
            </div>
            <div class="paragraphContainer">
                <h2>何をしてるの?</h2>
                <p>受託の案件をこなしたり、オリジナルのサービスを開発します。義務などはなく、楽しくできることは基本的には何をしてもいいです。主に勉強会かな?</p>
            </div>
            <div class="paragraphContainer">
                <h2>私は初心者なのですが、入れますか...?</h2>
                <p>もちろんです。初歩の初歩から丁寧に教えます。これは有志の人の趣味であって、やりたくてやっているので嫌がられるとかはありえないです。</p>
            </div>
        </div>
    </div>
</template>

<script>

export default {

}
</script>

<style lang="scss" scoped>
#topContainer {
    background-color: rgba(183, 207, 243, 0.3);
    height: 100%;
    min-height: 800px;
    width: 100%;
    padding: 20px;
    .container {
        background: rgba(255,255,255,0.9);
        min-height: 500px;
        width: 70%;
        padding: 20px;
        margin: 20px auto;
        border-radius: 10px;
        color: rgba(0,0,0,0.7);
        > .paragraphContainer {
            padding: 20px;
        }
        > .title {
            border-bottom: 2px solid gray;
        }
    }
}
</style>