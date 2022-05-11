<?php 
require_once('header.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4">
                <div class="card" style="width: 18rem;">
                <img src="data:image/png;base64,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" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Realize um cadastro para o seu aluno!</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
                </div>
                </div>
            </div>

            <div class="col-6 col-sm-4">
                <div class="card" style="width: 18rem;">
                <img src="https://www.seekpng.com/png/detail/335-3355123_registration-icon-portable-network-graphics.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Atualize um cadastro já feito de seu aluno!</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="atualiza.php" class="btn btn-primary">Atualizar</a>
                </div>
                </div>
            </div>
        
            <div class="col-6 col-sm-4">
                <div class="card" style="width: 18rem;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAclBMVEX///8AAACOjo4wMDBhYWHt7e3IyMh0dHSqqqqGhoa5ubk+Pj6lpaXn5+eTk5P09PR8fHz39/fe3t4ZGRnc3Ny/v79tbW0PDw8eHh7W1taDg4NycnIVFRVUVFQyMjKZmZlISEhcXFwmJiawsLDOzs48PDwFYTq8AAAGjUlEQVR4nO2dZ3vaMBCAY8JMMJgdmjJS0v//F/s4kMT2nXSngUZz79cGrLcyGncaDw+CIAiCIAiCIAiCIAiCIARjs10VefE2NvLbxS6vFTO24K/YRbXlOOcJbmMX1J7VgiM4jV1MFw4MwUHsQrrxRBv2YpfRjUfaMM9m9Js9JbiMXUJXppThJnYJXRlRhk+xS+hKXwzFMHnE8Ccb7h6T4sWzYX9IfS48y5k/wxU5EorDApvn2RgeWZOuKEz8GDInzlE4+DA0ivCEZu7DMERB7QE/RXPDbYhy2gPmQuaGvRDltGftbsgPQkYBhJXEUAyTQwwhYpgaYgj5gYanEOW0Z+FuuDrGDljocTfMDTEUw/QRQzFMHzEUw/QRQzFMHzEUw/QRQzFMHzH8iYaHWS9lwM6J/y5eCpYqSMxbDJNDDCGX7icmIcppj7lhbohh/ohh/ohh/ohh/ohh/ohh/ohh/ohh/rgblvvNZXqa9U7T8WY/uEcZ3XAyXE9Hf7qffxxN115KtpiOrWkem2BtOLhoTqnZXtw37DkdoeJsuLicqWccGKekJGs4qHiPmTj9KuMZLg3OUOov8zMsDc+I2lrXYyRDi/OFbLcnRjF8/23ztJf3bAxHts+r8jAsQefO56XMwHDo8sCi2CRveHJ5Xo1xLjywIbOP1/EracNXl6d98pqwoRdBU8WQhh5e0SvkSWmRDD2ek2jS3MyriTXNDpg29LrKy3VKZQFpCI6VcMNhsnEvQ6uhqJrfyRmik6XqyLJBW6jgZ70QhuhBl6OHOecM0zV+oLL5+O2ehmAfdE3dUM2Vp6F9Uf/ikHOoiiLwsVl6Q6yrv3ZqZC1eQ4pYLRr1inc2xNrRz/IRtfjZZmKKjvHUAQOu4TMs3XdfOtedOv/dKSCKZyfBUvs/e4NpiEwJm2+YRrHZ6yGKdmGNOxjCPqH9E1Iqtrt1qPiciCGswm4bMceHA91xC+wXXY5Z9GgIzuODASW0uYEDM9BpuKTw/BnCb0KWyiKdBjLyHIM/sohM+TdEemskKghqESk7ctOAw8ppf4ZYl44ptv+OJ1jsEjB8Rz+JKTZbVKagS1vjzVBxDYm+FtmCDoctejNU9XWY4mengQiq4qzH6Ibq71ErGggWhXXWzZch2FWhV9yZCtpHbHwZ6m4DwmvRTNAuH+XTULsSASldiXT0+HHaN1axDfVfwJrEEnFW26l++fhM0rxLRmFIBZwZ75i2BgvneTAbhSHe3zcga5GMlIcKDisMNU3pDaIW6VQAeaGNJxSGjISothYZuY5Qm/oUhpyr4zS1yEnmhAoNKwxZ64KUiqxsFecCtDsa9jllVL2ovHTcOQdDXJGZb8zDEBs/w8sIcjZEJwistE04QzDKM2hpVDMgbTT8i1AtDQiKXg1ZS9iUUzxWLb4FMlSEMjmthWYOqwgVtwiVggIPvhoyrhrVTtIZtRjoSBRYV1dDegEGEYUYkIphbqdBRK6G5AoMMsxCKjoloLhg7+LVkOrUGHEkaorpENjnMkQjFbc5vj7DywqUEbXY+MvNduSfV3jTU8tQ2+Ujgj2kadTWYrM7DHuFcp9+KCaIzjR0tdgMekcx3Kv/AhH8iMlgiupvaTY0UQzVwTa8BmuMarEZaotjqPgh7tSCRoqtMVscQ0WfrxM0eVEv8Q3RBV/aGqxh12Jrf2IcQ/Q1pQTZtdieOoU1/ArywaDwChEEcxNMEc4X2wsUwxp+PxvMgJB1k8gsC1EE/1mdNH5YQ91zQfIdXV0JFGG2qDNzCmrYHGrAf+0oooJAEUmHdfJOIQ1brw+SPWopKgQ7iohgN6Af0rCV8sI6jIaiUrCliCU0u1vZAxp2ZqVYfuZLUSPYUMQEQfwimOEZ9AZYQOlWzUTuplILwvx2IEPsZm10W+WarMGaSiVYwOeUw/vzrtjLgkaG16zs20ghmNjhKejotFiSNVhT4YPu1K64dtz+C0nvlnmPe/NqUjywVhWysiJUOsYMh334XcLvXGPhtF21TYKHLH3AWknGIfz2Si6a0KIJLrss7s3Sh2C6NVhT0vsNCXYBMjFukEdf6TkH3ldpA2chmBLrFcFBQfcE8wi999eWgeWbCued6QK3aDEIk7D3xdz4mJMqgyamzZK75O2Dt+T7CIySfZrLa9qdvIb5lLFy7e8lu/ezxX6iHeX8nWX5enZYnvDJ8W70lFH3QFFuptXb8y0Hejz0J+Phf2QnCIIgCIIgCIIgCIIgCALBP1C3hXoYHPrmAAAAAElFTkSuQmCC" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Delete um cadastro já feito de seu aluno!</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Deletar</a>
                </div>
                </div>
        </div>
    </div>
</body>
</html>