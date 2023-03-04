<section id="main-content">
    <section class="wrapper">
        <form action="index.php?c=pro&a=add" method="post" class="form-horizontal tasi-form" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label">عنوان</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="frm[title]">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">توضیحات</label>
                <div class="col-sm-10">
                    <textarea name="frm[text]"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">تصویر1</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="image1">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">2تصویر</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="image2">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">تصویر3</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="image3">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">دسته بندی</label>
                <div class="col-sm-10">
                    <select class="form-control input-lg m-bot15" name="frm[cat_id]">
                        <?php foreach ($res as $val): ?>
                            <option value="<?php echo $val['id'] ?>"><?php echo $val['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">تعداد موجودی</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="frm[count]">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">قیمت</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="frm[price]">
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






