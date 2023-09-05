<style>
    .posters {
        width: 100%;
        height: 380px;
        overflow: hidden;
        text-align: center;

    }
.controller{
    box-sizing: border-box;
    display: flex;
    justify-content: space-between;
}
    .icons {
        display: flex;
        width: 320px;
        overflow: hidden;
    }
    .icon img{
        width: 80px;
        height: 100px;
        flex-shrink: 0;
        position: relative;
    }
    .right ,.left{
        border-top: 70px solid transparent;
        border-bottom: 70px solid transparent;

    }
    .left{
        border-right: 40px solid yellow;
    }
    .right{
        border-left: 40px solid yellow;
    }
</style>

<div id="mm">
    <div class="half" style="vertical-align:top;">
        <h1>預告片介紹</h1>
        <div class="rb tab" style="width:95%;">
            <div class='posters'>
                <?php
                $rows = $Poster->all();
                foreach ($rows as $row) {
                ?>
                    <div>

                        <img src="./upload/<?= $row['img']; ?>.jpg" alt="">
                    </div>
                    <?= $row['name']; ?>
                <?php
                }
                ?>
            </div>
            <div class="controller">
                <div class="left">

                </div>
                <div class="icons">

                    <?php
                    foreach ($rows as $row) {
                    ?>
                        <div class="icon">
                            <img src="./upload/<?= $row['img']; ?>.jpg" alt="">
                            <?= $row['name']; ?>
                        </div>
                    <?php
                    }
                    ?>

                </div>
                <div class="right">

                </div>
            </div>
        </div>
    </div>
    <div class="half">
        <h1>院線片清單</h1>
        <div class="rb tab" style="width:95%;">
            <table>
                <tbody>
                    <tr> </tr>
                </tbody>
            </table>
            <div class="ct"> </div>
        </div>
    </div>
</div>