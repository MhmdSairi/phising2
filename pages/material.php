<div class="scroll-other">
<div class="balance material-1 kiri" onclick="openOther(event, 'material1');" id="defaultTabOther">
<div class="balance-name">5 Unit</div>
<div class="balance-total">Free</div>
</div>
<div class="balance material-1 kanan" onclick="openOther(event, 'material2');">
<div class="balance-name">10 Unit</div>
<div class="balance-total">Free</div>
</div>
<div class="balance material-2 kiri" onclick="openOther(event, 'material3');">
<div class="balance-name">13 Unit</div>
<div class="balance-total">Free</div>
</div>
<div class="balance material-2 kanan" onclick="openOther(event, 'material4');">
<div class="balance-name">15 Unit</div>
<div class="balance-total">Free</div>
</div>
<div class="balance material-3 kiri" onclick="openOther(event, 'material5');">
<div class="balance-name">18 Unit</div>
<div class="balance-total">Free</div>
</div>
<div class="balance material-3 kanan" onclick="openOther(event, 'material6');">
<div class="balance-name">20 Unit</div>
<div class="balance-total">Free</div>
</div>
</div>

<a href="javascript:;" onclick="buka('pages/uc');"><button type="button" class="balance-change kiri">Credit <i class="fa fa-chevron-left previous"></i></button></a>
<a href="javascript:;" onclick="buka('pages/paint');"><button type="button" class="balance-change kanan">Paint <i class="fa fa-chevron-right next"></i></button></a>

<center>
<div id="material1" class="tab_other">
<button type="button" class="balance-collect" onclick="login()">Collect <i class="fa fa-chevron-right"></i></button>
</div>
<div id="material2" class="tab_other">
<button type="button" class="balance-collect" onclick="login()">Collect <i class="fa fa-chevron-right"></i></button>
</div>
<div id="material3" class="tab_other">
<button type="button" class="balance-collect" onclick="login()">Collect <i class="fa fa-chevron-right"></i></button>
</div>
<div id="material4" class="tab_other">
<button type="button" class="balance-collect" onclick="login()">Collect <i class="fa fa-chevron-right"></i></button>
</div>
<div id="material5" class="tab_other">
<button type="button" class="balance-collect" onclick="login()">Collect <i class="fa fa-chevron-right"></i></button>
</div>
<div id="material6" class="tab_other">
<button type="button" class="balance-collect" onclick="login()">Collect <i class="fa fa-chevron-right"></i></button>
</div>
</center>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tab_other.js"></script>
<script src="js/popup.js"></script>