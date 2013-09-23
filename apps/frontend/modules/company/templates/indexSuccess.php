<h1>Companys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Company name</th>
      <th>Address</th>
      <th>Description</th>
      <th>Contactor</th>
      <th>Phone number</th>
      <th>Email</th>
      <th>Is activated</th>
      <th>Token</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($companys as $company): ?>
    <tr>
      <td><a href="<?php echo url_for('company/show?id='.$company->getId()) ?>"><?php echo $company->getId() ?></a></td>
      <td><?php echo $company->getUserId() ?></td>
      <td><?php echo $company->getCompanyName() ?></td>
      <td><?php echo $company->getAddress() ?></td>
      <td><?php echo $company->getDescription() ?></td>
      <td><?php echo $company->getContactor() ?></td>
      <td><?php echo $company->getPhoneNumber() ?></td>
      <td><?php echo $company->getEmail() ?></td>
      <td><?php echo $company->getIsActivated() ?></td>
      <td><?php echo $company->getToken() ?></td>
      <td><?php echo $company->getCreatedAt() ?></td>
      <td><?php echo $company->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('company/new') ?>">New</a>
