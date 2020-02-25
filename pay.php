<?php
$paymentIdToIconName = [
'1' => 'webmoney.png',
'2' => 'ya.png',
'3' => 'cash.png',
'4' => 'cash.png',
'12' => 'ya.png',
'13' => 'cash.png',
'5' => 'robo.png',
'6' => 'qiwi.png',
'7' => 'cash.png',
'8' => 'sci.png',
'9' => 'payanyway.png',
'10' => 'paymaster.png',
'11' => 'alfabank.png',
'14' => 'yandexkassa.png',
'15' => 'privat24.png',
'16' => 'liqpay.png',
'17' => 'sber.png',
'18' => 'tinkoff.png',
'19' => 'paypal.png',
'21' => 'paykeeper.png',
'20' => 'comepay.svg',
'22' => 'cloudpayments.png',
'23' => 'ya-pay-parts.svg',
'24' => 'yandexkassa.png',
'25' => 'apple.png',
'26' => 'free-kassa.png',
'27' => 'megakassa.png',
'28' => 'qiwi.png',
];

$res = DB::query(
'SELECT name, id FROM ' .
PREFIX .
'payment WHERE activity=1 ORDER BY id'
);

while ($payments = DB::fetchAssoc($res)) { ?>
<li title="Доступен способ оплаты «<?php echo $payments['name']; ?>»"
class="payment__item">
<img src="<?php echo SITE . '/mg-admin/design/images/icons/' . $paymentIdToIconName[$payments['id']] ?>"
alt="Доступен способ оплаты «<?php echo $payments['name']; ?>»">
</li>
<?php } ?>
<?php
$paymentIdToIconName = [
'1' => 'webmoney.png',
'2' => 'ya.png',
'12' => 'ya.png',
'5' => 'robo.png',
'6' => 'qiwi.png',
'8' => 'sci.png',
'9' => 'payanyway.png',
'10' => 'paymaster.png',
'11' => 'alfabank.png',
'14' => 'yandexkassa.png',
'15' => 'privat24.png',
'16' => 'liqpay.png',
'17' => 'sber.png',
'18' => 'tinkoff.png',
'19' => 'paypal.png',
'21' => 'paykeeper.png',
'20' => 'comepay.svg',
'22' => 'cloudpayments.png',
'23' => 'ya-pay-parts.svg',
'24' => 'yandexkassa.png',
'25' => 'apple.png',
'26' => 'free-kassa.png',
'27' => 'megakassa.png',
'28' => 'qiwi.png',
];

$res = DB::query(
'SELECT name, id FROM ' .
PREFIX .
'payment WHERE activity=1 ORDER BY id'
);

while ($payments = DB::fetchAssoc($res)) {
$imgName = isset($paymentIdToIconName[$payments['id']]) ? $paymentIdToIconName[$payments['id']] : 'cash.png';
?>
<li title="Доступен способ оплаты «<?php echo $payments['name']; ?>»"
class="payment__item">
<img src="<?php echo SITE . '/mg-admin/design/images/icons/' . $imgName; ?>"
alt="Доступен способ оплаты «<?php echo $payments['name']; ?>»">
</li>
<?php } ?>
<?php
$workTime = explode(',', MG::getSetting('timeWork'));
$workTimeDays = explode(',', MG::getSetting('timeWorkDays'));
foreach ($workTime as $key => $time) { ?>
<div class="c-contact__row">
<div class="c-contact__schedule">
<span class="c-contact__span">
<?php echo !empty($workTimeDays[$key]) ? htmlspecialchars($workTimeDays[$key]) : ''; ?>
</span>
<?php echo htmlspecialchars($workTime[$key]); ?>
</div>
</div>
<?php } ?>
