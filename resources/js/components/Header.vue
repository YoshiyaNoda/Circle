<template>
    <div id="header">
        <div class="leftArea"><span>LOGO</span></div>
        <div class="rightArea">
            <div class="contactUs">
                <div class="linkWrapper"><router-link to="contact">CONTACT</router-link></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>

#header {
    width: 100%;
    height: 100px;
    background-color: rgba(150,150,150,0.3);
    position: relative;
    > .leftArea {
        position: absolute;
        left: 0;
        top: 0; 
        height: 100%;
        width: 300px;
        > span {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
    }
    > .rightArea {
        float: right;
        height: 100%;
        > .contactUs {
            height: 100%;
            width: 100px;
            position: relative;
            > .linkWrapper {
                position: absolute;
                top: 50%;
                right: 50%;
                transform: translateX(-50%) translateY(-50%);
            }
        }
    }
}
</style>