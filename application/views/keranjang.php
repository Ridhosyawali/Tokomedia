<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-bordered table-stripedd table-hover">
        <tr align="center">
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>

        <?php 
        $no=1;
        foreach($this->cart->contents()as $items) :     ?>

            <tr>
                <td align="center"><?php echo $no++ ?> </td>
                <td><?php echo $items['name'] ?> </td>
                <td align="center"><?php echo $items['qty'] ?> </td>
                <td align="right">Rp.<?php echo number_format($items['price'],0,',','.') ?> </td>
                <td align="right">Rp.<?php echo number_format($items['subtotal'],0,',','.')  ?> </td>
            </tr>
            

        <?php endforeach ; ?>
        <tr>
            <td colspan="4"></td>
                <td align="right">Rp.<?php echo number_format($this->cart->total(),0,',','.') ?></td>
            </tr>
    </table>

    <div align="right">
        <a href="<?= base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
        <a href="<?= base_url('dashboard/pembayaran') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
    </div>
</div>