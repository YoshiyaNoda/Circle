<template>
    <div id="topContainer">
        <div class="container">
            <h1 class="title">連絡先交換</h1>
            <div class="paragraphContainer">
                <h2>メール</h2>
                <p>〇〇@gmail.com にて連絡をお待ちしています。</p>
            </div>
            <div class="paragraphContainer">
                <h2>LINE</h2>
                <p>QRコード読みとりで友達登録できます。</p>
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
        background: rgba(246, 247, 248, 0.7);
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