<?php slot('company_show', 'active')?>

<h2>公司信息</h2>
<table class="table">
  <tbody>
    <tr>
      <th>商家编号：</th>
      <td><?php echo $company->getUserId() ?></td>
    </tr>
    <tr>
      <th>公司名称：</th>
      <td><?php echo $company->getCompanyName() ?></td>
    </tr>
    <tr>
      <th>公司地址：</th>
      <td><?php echo $company->getAddress() ?></td>
    </tr>
    <tr>
      <th>描述:</th>
      <td><?php echo $company->getDescription() ?></td>
    </tr>
    <tr>
      <th>联系人:</th>
      <td><?php echo $company->getContactor() ?></td>
    </tr>
    <tr>
      <th>电话:</th>
      <td><?php echo $company->getPhoneNumber() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $company->getEmail() ?></td>
    </tr>
    <tr>
      <th>状态:</th>
      <td><?php echo $company->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $company->getToken() ?></td>
    </tr>
    <tr>
      <th>创建时间:</th>
      <td><?php echo $company->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>更新时间:</th>
      <td><?php echo $company->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>
<button class="btn" onclick="gotoUrl('<?php echo url_for('company/edit') ?>')"><i class="icon-edit"></i>&nbsp;&nbsp;编辑</button>
