<?php
namespace oe800\BBCodeCards\Listeners;
use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;
class AddBBCode
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addBBCode']);
    }
    public function addBBCode(ConfigureFormatter $event)
    {



	 $event->configurator->BBCodes->addCustom(
            '[CARD]{COLOR},{URL},{URL2},{TEXT2},{TEXT3},{TEXT4},{TEXT5}[/CARD]',
            '<div class="ccontainer" style="--main-bg-color: {COLOR}">
   <div class="ccolumn">
    <div class="cpost-module"><div class="cthumbnail">
    <img src="{URL}">
      </div>
      <div class="cpost-content">
        <div class="ccategory">{TEXT2}</div>
        <h1 class="ctitle">{TEXT3}</h1>
        <h2 class="csub_title">{TEXT4}</h2>
        <p class="cdescription">{TEXT5}</p>
        <div class="cpost-meta"><a href="{URL2}" target="_blank"><div class="butread">Read More</div></a>
        </div>
      </div>
    </div>
  </div>
</div>'
        );

$event->configurator->BBCodes->addCustom(
            '[CARD2]{COLOR},{URL},{URL2},{TEXT2},{TEXT3},{TEXT4},{TEXT5}[/CARD2]',
            '<div class="ccontainer" style="--main-bg-color: {COLOR}">
   <div class="ccolumn2">
    <div class="cpost-module"><div class="cthumbnail">
    <img src="{URL}">
      </div>
      <div class="cpost-content">
        <div class="ccategory">{TEXT2}</div>
        <h1 class="ctitle">{TEXT3}</h1>
        <h2 class="csub_title">{TEXT4}</h2>
        <p class="cdescription">{TEXT5}</p>
	<div class="cpost-meta"><a href="{URL2}" target="_blank"><div class="butread">Read More</div></a>
        </div>
      </div>
    </div>
  </div>
</div>'


);

$event->configurator->BBCodes->addCustom(
            '[CARD3]{COLOR},{URL},{URL2},{TEXT2},{TEXT3},{TEXT4},{TEXT5}[/CARD3]',
            '<div class="ccontainer" style="--main-bg-color: {COLOR}">
   <div class="ccolumn3">
    <div class="cpost-module"><div class="cthumbnail">
    <img src="{URL}">
      </div>
      <div class="cpost-content">
        <div class="ccategory">{TEXT2}</div>
        <h1 class="ctitle">{TEXT3}</h1>
        <h2 class="csub_title">{TEXT4}</h2>
        <p class="cdescription">{TEXT5}</p>
	<div class="cpost-meta"><a href="{URL2}" target="_blank"><div class="butread">Read More</div></a>
        </div>
      </div>
    </div>
  </div>
</div>'
        );


$event->configurator->BBCodes->addCustom(
            '[ACARD]{URL},{URL2},{TEXT},{TEXT2},{TEXT3},{TEXT4}[/ACARD]',
            '<div class=ccsection><div class="ccauthor">
    <a href="{URL}" target="_blank" class="name">
      <img src="{URL2}" class="circle" /><br/>
      {TEXT}
    </a>
    <p>{TEXT2}</p>
  </div>
<div class=ccarticle>  
  <div class="ccarticle-content">
    <h2>{TEXT3}</h2>
    <p>{TEXT4}</p><br>
  </div>
</div>
</div>'
        );



    }
}
