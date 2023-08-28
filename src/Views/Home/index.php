<?php include_once __DIR__ . '/../Commons/base_header.php'; ?>

<p>Home</p>

<?php if (isset($name)): ?>
    <p>Hello <?= htmlspecialchars($name, ENT_QUOTES) ?>!</p>
<?php endif; ?>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit neque, interdum vel laoreet tristique, pharetra
    in magna. Nullam leo ligula, elementum nec quam in, aliquet lobortis elit. Pellentesque ultrices arcu in ante cursus
    pellentesque. Nam gravida ut risus in imperdiet. Ut facilisis mauris sit amet eros aliquam elementum. Aliquam quis
    enim ac nisi laoreet ultricies. Nam tristique placerat arcu, quis commodo lorem ullamcorper id. Maecenas feugiat,
    mauris at tempus tristique, nibh erat dictum justo, elementum venenatis velit ligula eget leo. Sed egestas volutpat
    magna et suscipit. Maecenas vulputate velit id libero faucibus convallis. Pellentesque quis felis neque. Morbi
    tristique lorem a scelerisque vestibulum. Praesent varius, lorem et vestibulum posuere, massa nulla auctor felis, ac
    lobortis ligula justo dignissim mauris. Donec iaculis dapibus iaculis. Suspendisse dapibus finibus sapien a
    hendrerit.
</p>
<p>
    Integer eget mollis augue. Aenean luctus congue sapien, ac ultrices mauris dignissim consectetur. Phasellus ut nulla
    massa. Nullam massa leo, porta ut mollis sed, rhoncus sit amet justo. Nulla laoreet eleifend lectus, eu tempus ipsum
    accumsan non. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse
    rutrum justo condimentum, volutpat magna eget, mattis odio. Vivamus libero arcu, sodales quis eros at, pretium
    maximus urna. Nam mollis ullamcorper nisl sit amet volutpat. Aenean vestibulum finibus nibh a rhoncus. Nulla egestas
    nibh eget augue ultricies, non lacinia erat convallis.
</p>
<p>
    Cras eleifend lacus at leo tristique, vitae eleifend turpis mattis. Maecenas eros risus, convallis eget pharetra in,
    convallis sit amet enim. Mauris non condimentum magna. Integer non libero libero. Morbi nec mattis nisl. Maecenas ut
    lobortis dui. Vivamus hendrerit gravida urna vitae auctor. Sed imperdiet orci neque, sit amet feugiat erat varius a.
</p>

<?php if (isset($model)): ?>
    <p><?= htmlspecialchars($model->getName(), ENT_QUOTES) ?></p>
<?php endif; ?>

<?php include_once __DIR__ . '/../Commons/base_footer.php'; ?>
