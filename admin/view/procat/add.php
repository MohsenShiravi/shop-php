<section id="main-content">
    <section class="wrapper">
        <form action="index.php?c=procat&a=add" method="post" class="form-horizontal tasi-form">
            <div class="form-group">
                <label class="col-sm-2 control-label">عنوان دسته بندی</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="frm[title]">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">سرگروه</label>
                <div class="col-sm-10">
                    <select class="form-control input-lg m-bot15" name="frm[chid]">
                        <option value="0">سرگروه</option>
                        <?php foreach ($res as $val): ?>
                            <option value="<?php echo $val['id'] ?>"><?php echo $val['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <input type="submit" value="ثبت" class="btn btn-xs btn-success" />
                </div>
            </div>

        </form>
    </section>
</section>






