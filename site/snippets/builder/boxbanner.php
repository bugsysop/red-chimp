              <table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr><td align="center" valign="top" class="bannerShim">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-height=400px; margin-bottom:40px; margin-top: 20px; background-color:<?= $data->color_bg() ?>;">
                  <tr><td align="center" valign="middle" class="textContent" style="padding:20px;">

                      <p style="<?php if ($data->text_font()->isNotEmpty()): ?>font-family:<?= $data->text_font() ?>;<?php endif ?> font-size: 20px; line-height: 160%;color:<?= $data->text_color() ?>; text-align: center;"> <?= $data->text() ?> </p>
                      <?php if ($data->link_text()->isNotEmpty()): ?>
                      <p style="color:<?= $data->text_color() ?>; text-decoration:none; font-weight:normal; font-size:13px; text-transform:uppercase; line-height:300%; text-align: center;">
                      <?= $data->link_text()->h() ?>&nbsp;&rarr;</p></a>
                      <?php endif ?>

                  </td></tr>
                  </table>
              </td></tr>
              </table>
