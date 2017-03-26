
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                <tr><td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <table class="flexibleContainer" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tr><td class="flexibleContainerCell" align="center" valign="top" width="600" style="padding-top: 20px;padding-right: 20px;padding-left: 20px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                          <tr><td class="imageContent"  valign="top" style="font-family: <?= $page->parent()->letter_tfont() ?>;font-size: 16px;color: #404040;line-height: 125%;text-align: Left;padding-bottom: 20px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                            <?php $image = $page->image($data->img()); ?>
                            <?php if($image): ?>
                            <img src="<?= $image->url() ?>" width="560" class="flexibleImage" style="max-width:560px;" />
                            <?php endif ?>

                          </td></tr>
                          <tr><td class="textContent" valign="top" style="font-family: <?= $page->parent()->letter_tfont() ?>;font-size: 16px;color: #404040;line-height: 125%;text-align: Left;padding-bottom: 20px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                          <?= $data->text()->kt() ?>
                          <?php if($data->link_text()->isNotEmpty()): ?>
                          <p><a href="<?= $data->link_url() ?>"><?= $data->link_text()->h() ?>&nbsp;&rarr;</a></p>
                          <?php endif ?>

                          </td></tr>
                          </table>
                    </td></tr>
                    </table>
                </td></tr>
                </table>
