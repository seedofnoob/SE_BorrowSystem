    <table id="tb_user_wait" class="table table-bordered table-striped mt-5">
      <thead>
        <tr class="text-center bg-secondary">
          <th>ลำดับ</th>
          <th>อุปกรณ์ที่ยืม</th>
          <th>เหตุผลที่ยืม</th>
          <th>จำนวน</th>        
          <th>สถานะ</th>
          <th>ยกเลิกคำร้อง</th>
        </tr>
      </thead>
      <tbody>
      <?php for($id=1; $id <=50; $id++) { ?>
        <tr>
          <td class="text-center"><?php echo $id; ?></td>
          <td class="text-center">ชื่ออุปกรณ์</td>
          <td class="text-center">เพราะว่า : เหตุผลที่ <?php echo $id; ?></td>
          <td class="text-center">
          <?php 
            if($id%2==1){
              echo "2";
            }
            else{
              echo  "4";
            }
          ?>
          </td>
          <td class="text-center"><?php echo "รออนุมัติ";?></td>
          <td class="text-center"><a href="#" onclick="deleteItem(<?php echo $id; ?>);"><button type="button" class="btn btn-danger " >ลบ</button></a> </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
 


