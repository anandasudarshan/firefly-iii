<?php

namespace FireflyIII\Database;


use FireflyIII\Database\Ifaces\CommonDatabaseCalls;
use FireflyIII\Database\Ifaces\CUD;
use FireflyIII\Database\Ifaces\TransactionTypeInterface;
use FireflyIII\Exception\FireflyException;
use FireflyIII\Exception\NotImplementedException;
use Illuminate\Support\Collection;
use LaravelBook\Ardent\Ardent;

/**
 * Class TransactionType
 *
 * @package FireflyIII\Database
 */
class TransactionType implements TransactionTypeInterface, CUD, CommonDatabaseCalls
{

    /**
     * @param Ardent $model
     *
     * @return bool
     */
    public function destroy(Ardent $model)
    {
        // TODO: Implement destroy() method.
        throw new NotImplementedException;
    }

    /**
     * @param array $data
     *
     * @return Ardent
     */
    public function store(array $data)
    {
        // TODO: Implement store() method.
        throw new NotImplementedException;
    }

    /**
     * @param Ardent $model
     * @param array  $data
     *
     * @return bool
     */
    public function update(Ardent $model, array $data)
    {
        // TODO: Implement update() method.
        throw new NotImplementedException;
    }

    /**
     * Validates an array. Returns an array containing MessageBags
     * errors/warnings/successes.
     *
     * @param array $model
     *
     * @return array
     */
    public function validate(array $model)
    {
        // TODO: Implement validate() method.
        throw new NotImplementedException;
    }

    /**
     * Validates a model. Returns an array containing MessageBags
     * errors/warnings/successes.
     *
     * @param Ardent $model
     *
     * @return array
     */
    public function validateObject(Ardent $model)
    {
        // TODO: Implement validateObject() method.
        throw new NotImplementedException;
    }

    /**
     * Returns an object with id $id.
     *
     * @param int $id
     *
     * @return Ardent
     */
    public function find($id)
    {
        // TODO: Implement find() method.
        throw new NotImplementedException;
    }

    /**
     * Finds an account type using one of the "$what"'s: expense, asset, revenue, opening, etc.
     *
     * @param $what
     *
     * @return \AccountType|null
     */
    public function findByWhat($what)
    {
        switch ($what) {
            case 'opening':
                return \TransactionType::whereType('Opening balance')->first();
                break;
            case 'transfer':
                return \TransactionType::whereType('Transfer')->first();
                break;
            case 'withdrawal':
                return \TransactionType::whereType('Withdrawal')->first();
                break;
            case 'deposit':
                return \TransactionType::whereType('Deposit')->first();
                break;
            default:
                throw new FireflyException('Cannot find transaction type described as "' . e($what) . '".');
                break;


        }

        return null;
    }

    /**
     * Returns all objects.
     *
     * @return Collection
     */
    public function get()
    {
        // TODO: Implement get() method.
        throw new NotImplementedException;
    }

    /**
     * @param array $ids
     *
     * @return Collection
     */
    public function getByIds(array $ids)
    {
        // TODO: Implement getByIds() method.
        throw new NotImplementedException;
    }
}