              <table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td align="center" valign="top" class="bannerShim">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" height="400px"  style="background-color:<?= $data->color_bg() ?>;"><tr><td align="center" valign="middle" class="textContent" style="padding:20px;">

                    <h1 style="color:<?= $data->text_color() ?>; text-align: center;"> <?= $data->text() ?> </h1>
                    <?php if ($data->link_url()->isNotEmpty()): ?>
                    <h4 style="color:<?= $data->text_color() ?>; text-decoration:none; font-weight:normal; font-size:12px; text-transform:uppercase; line-height:20px; text-align: center;">
                    <?= $data->link_text()->h() ?>&nbsp;&rarr;</h4></a>
                    <?php endif ?>

                    </td></tr></table>
              </td></tr></table>
