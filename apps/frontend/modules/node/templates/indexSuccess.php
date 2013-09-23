<?php slot('node_index', 'active')?>

<h2><?php echo __('热点列表') ?></h2>

<div class="row-container">
	<div class="span3"><?php echo __('活动的热点： <a>%1%</a> 个', array('%1%' => Doctrine_Core::getTable('Node')->getActiveNodes()->count())) ?></div>
	<div class="span3"><?php echo __('活动的连接： <a>%1%</a> 个', array('%1%' => Doctrine_Core::getTable('Connection')->getActiveConnections()->count())) ?></div>
</div>

<br><hr>

<table class="table talbe-bordered table-hover">
<thead>
  <tr>
    <th><small><?php echo __('热点名称') ?></small></th>
    <th><small><?php echo __('网关ID') ?></small></th>
    <th><small><?php echo __('网关IP') ?></small></th>
    <th><small><?php echo __('路由器最近响应') ?></small></th>
    <th><small><?php echo __('最近心跳') ?></small></th>
    <th><small><?php echo __('连接数') ?></small></th>
    <th><small><?php echo __('部署状态') ?></small></th>
  </tr>
</thead>
<?php foreach ($nodes as $node) : ?>
  <?php if ($node->isOnline()) : ?>
    <tr class="online">
  <?php else : ?>
    <tr class="offline">
  <?php endif ?>

    <td><a href="<?php echo url_for('node/show?id='.$node->getId()) ?>"><?php echo $node->getName(); ?></a></td>
    <td><?php echo $node->getGwId(); ?></td>
    <td><?php echo $node->getLastHeartbeatIp(); ?></td>
    <td>
      <?php if ($node->getLastHeartbeatWifidogUptime()) : ?>
      <?php echo time_ago_in_words(time() - $node->getLastHeartbeatWifidogUptime()); ?>
      <?php endif ?>
    </td>
    <td>
      <?php if ($node->getLastHeartbeatAt()) : ?>
      <?php echo time_ago_in_words(date_format(date_create($node->getLastHeartbeatAt()), "U")); ?>
      <?php endif ?>
    </td>
    <td><?php echo $node->getNumActiveConnections(); ?></td>
    <td><?php echo $node->getDeploymentStatus(); ?></td>

  </tr>
<?php endforeach ?>
</table>

<button class="btn" onclick="gotoUrl('<?php echo url_for('node/new') ?>')"><i class="icon-plus"></i>&nbsp;&nbsp;增加</button>
