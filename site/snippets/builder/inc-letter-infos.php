
                    <!-- Module -->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tr><td class="textContent" valign="top" style="font-family: Helvetica,sans-serif;font-size: 16px;color: #404040;line-height: 125%;text-align: center;padding-bottom: 20px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                        <!-- Newsletter Footer Text -->
                        <?php if($page->parent()->footer_text()->isNotEmpty()): ?>
                          <p style="text-align:center; padding:20px; padding-bottom:0; color:#202020;">
                          <small><?= $page->parent()->footer_text()->h() ?></small></p>
                          <?php endif; ?>
                          <!-- Newsletter Social links -->
                          <p style="text-align:center; padding-bottom:0;">
                          <?php if($page->parent()->letter_tw()->isNotEmpty()): ?>
                          <a href="<?= "https://twitter.com/" . $page->parent()->letter_tw() ?>"><img src="<?= $kirby->urls()->assets() ?>/images/icon-twitter-official.png" height="31px" width="31px"></a>
                          <?php endif; ?>
                          <?php if($page->parent()->letter_fb()->isNotEmpty()): ?>
                          <a href="<?= "https://www.facebook.com/" . $page->parent()->letter_fb() ?>"><img src="<?= $kirby->urls()->assets() ?>/images/icon-facebook-official.png" height="30px" width="30px"></a>
                          <?php endif; ?>
                          <?php if($page->parent()->letter_st()->isNotEmpty()): ?>
                          <a href="<?= "https://seenthis.net/people/" . $page->parent()->letter_st() ?>"><img src="<?= $kirby->urls()->assets() ?>/images/icon-seenthis.png" height="<29px" width="29px"></a>
                          <?php endif; ?>
                          <?php if($page->parent()->letter_gh()->isNotEmpty()): ?>
                          <a href="<?= "https://github.com/" . $page->parent()->letter_gh() ?>"><img src="<?= $kirby->urls()->assets() ?>/images/icon-github-alt.png" height="30px" width="30px"></a>
                          <?php endif; ?>
                          </p>
                    </td></tr>
                    </table>
