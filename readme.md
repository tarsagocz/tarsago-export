# Tarsago Export

## Installation
```
composer require mfajfr/tarsago-export
```

## Using

### Creating row
Row represents order from telemarketing etc.

```php
$row = new \TarsagoExport\Models\Telemarketing\Row($param1, $param2, ...); // implements IRow 
```

### Creating transaction
Transaction represents list of rows (orders) from one day or specific period
```php
$transaction = new \TarsagoExport\Models\Telemarketing\Transaction(); // implements ITransaction
$transaction->addRow($row); // Adding rows
```

### Uploading (to SFTP)

```php
$exporter = new \TarsagoExport\Exporters\SFTPExporter($ip, new \TarsagoExport\Credentials\UserPasswordCredentials($username, $password));
$exporter->upload('/path/to/file.csv', $transaction);
```