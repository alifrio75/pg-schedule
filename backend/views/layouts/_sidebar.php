<?php
use yii\helpers\Url;
use yii\helpers\Html;
use ramosisw\CImaterial\widgets\Menu;

?>

	    <div class="sidebar" data-color="orange" data-image="logo.png">

			<div class="logo">
				<a href="" class="simple-text">
					Enfield
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	    	    
<?php 

echo Menu::widget([
    'items' => [
        ['label' => 'Home', 'url' => ['site/index'], 'icon' => 'dashboard'],
        ['label' => 'Jadwal', 'url' => ['/pertandingan-jadwal'], 'icon' => 'date_range'],
        ['label' => 'Atlet', 'url' => ['/atlet'], 'icon' => 'face'],
        ['label' => 'Wasit', 'url' => ['/pertandingan-wasit'], 'icon' => 'touch_app'],
        ['label' => 'Article', 'url' => ['/article'], 'icon' => 'assignment', 'items' => [
            ['label' => 'News', 'url' => ['/article/sort', 'status' => 1], 'icon' => 'subject'],
            ['label' => 'Article', 'url' => ['/article/sort', 'status' => 2], 'icon' => 'picture_in_picture'],
            ['label' => 'Draft', 'url' => ['/article/sort', 'status' => 3], 'icon' => 'drafts'],
        ]],
        ['label' => 'Pages', 'url' => ['/pages'], 'icon' => 'markunread_mailbox', 'items' => [
            ['label' => 'About', 'url' => ['/pages/view', 'id' => 1], 'icon' => 'label_outline'],
            ['label' => 'Visi & Misi', 'url' => ['/pages/view', 'id' => 2], 'icon' => 'label_outline'],
            ['label' => 'Struktur Organisasi', 'url' => ['/pages/view', 'id' => 3], 'icon' => 'label_outline'],
            ['label' => 'Tugas Pokok Dan Fungsi', 'url' => ['/pages/view', 'id' => 4], 'icon' => 'label_outline'],
            ['label' => 'Sejarah', 'url' => ['/pages/view', 'id' => 5], 'icon' => 'label_outline'],
            ['label' => 'Pengumuman', 'url' => ['/pages/view', 'id' => 6], 'icon' => 'label_outline'],
            ['label' => 'Peraturan Pertandingan', 'url' => ['/pages/view', 'id' => 7], 'icon' => 'label_outline'],
            ['label' => 'Peraturan Internasional', 'url' => ['/pages/view', 'id' => 8], 'icon' => 'label_outline'],
        ]],
        ['label' => Yii::$app->user->identity->username, 'url' => ['/mimin/user/view'], 'icon' => 'account_circle', 'items' => [
            ['label' => 'Setting', 'url' => ['/general-setting'], 'icon' => 'settings'],
            ['label' => 'Logout', 'url' => ['site/logout'], 'icon' => 'input'],
        ]],
    ], 'options' => ['class' => 'nav']
]);
?>
	    	</div>
	    </div>
