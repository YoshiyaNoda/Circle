<template>
    <div id="header">
        <div class="leftArea"><span><img src="https://ysy-portfolio.s3-ap-northeast-1.amazonaws.com/img/logo1.png" alt=""></span></div>
        <div class="rightArea">
            <div class="btnWrapper">
                <div class="linkWrapper"><router-link to="/"><span>TOP</span></router-link></div>
            </div>
            <div class="btnWrapper">
                <div class="linkWrapper"><router-link to="contact"><span>CONTACT</span></router-link></div>
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
    // background-color: rgba(150,150,150,0.3);
    background-color: white;
    position: relative;
    padding-left: 30px;
    padding-right: 30px;

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
        height: 100%;
        > .btnWrapper {
            float: right;
            height: 100%;
            width: 100px;
            position: relative;
            > .linkWrapper {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translateX(-50%) translateY(-50%);
                > a {
                    border: none;
                    text-decoration: none;
                    span {
                        color: rgba(145, 189, 240, 1.0);
                    }

                }
            }
        }
    }
}
</style>