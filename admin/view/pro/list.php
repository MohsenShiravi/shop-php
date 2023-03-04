<table class="table table-striped border-top dataTable" id="sample_1" aria-describedby="sample_1_info">
    <thead>
    <tr role="row"><th style="width: 13px;" class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="
                          ">
         ردیف</th>
             <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 700px;">
                 عنوان محصول
             </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 700px;">
           تعداد
        </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 700px;">
            قیمت
        </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 700px;">
            تصویر
        </th>
            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 100px;">

            </th>
            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 100px;">

            </th>
            <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Joined: activate to sort column ascending" style="width: 100px;">

            </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($pro as $key=>$value):?>
    <tr class="gradeX even">
        <td class=" "><?php echo $key+1; ?></td>
        <td class=" "><?php echo $value['title']; ?></td>
        <td class=" "><?php echo $value['count']; ?></td>
        <td class=" "><?php echo $value['price']; ?></td>
        <td class=" "><img width="50" src="<?php echo $value['image1']; ?>"/></td>
        <td class="hidden-phone "><a href="" class="label label-warning">نمایش</a></td>
        <td class="hidden-phone "><a href="index.php?c=pro&a=edit&id=<?php echo $value['id']; ?>" class="label label-success">ویرایش</a></td>
        <td class="hidden-phone "><a href="index.php?c=pro&a=delete&id=<?php echo $value['id']; ?>" class="label label-danger">حذف</a></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>




