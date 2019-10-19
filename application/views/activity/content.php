<div class="container">
    <h3>บันทึกกิจกรรม</h3><br>
    <div class="row">
    <div class="col-md-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="ชื่อกิจกรรม" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
            <div class="input-group-append" id="button-addon4">
                <button class="btn btn-info" type="button">ค้นหา</button>
                <a href="<?php echo base_url('index.php/activity/insert/');?>" class="btn btn-info" type="button">เพิ่มกิจกรรม</a>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">ชื่อกิจกรรม</th>
                <th scope="col">วันที่ทำกิจกรรม</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                    <td>กิจกรรม 4 ชั้นปี</td>
                    <td>12 เม.ย. - 15 เม.ย. 2562</td>
                    <td>
                        <a href="<?php echo base_url('index.php/activity/update/');?>" class="btn btn-warning" type="button">แก้ไข</a>
                        <a href="<?php echo base_url('index.php/activity/delete/');?>" class="btn btn-danger" type="button">ลบ</a>
                    </td>
                </tr>
            </tbody>
            </table>
            </div>
        </div>