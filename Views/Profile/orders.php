<div class="col-sm-6 bg-info rounded m-2 d-flex mx-auto p-2 orderDetail" id='<?= $value['id']?>'>
    <p class="col-sm-6 mr-2 my-auto text-warning">Ngày mua : <span class="font-weight-bold text-white"><?= $value['created'] ?? "6/20/2020" ?></span></p>
    <p class="col-sm-6 my-auto text-warning">Tổng tiền <span class="font-weight-bold text-white"><?= number_format($value['totalMoney'] ?? "45000" ) ?></span></p>
</div>
