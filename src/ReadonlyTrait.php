<?php

namespace Kanekescom\LaravelEloquentReadonly;

use Illuminate\Database\Eloquent\Builder;
use Kanekescom\LaravelEloquentReadonly\ReadonlyException;

trait ReadonlyTrait
{
    /**
     * Throws ReadonlyException on create
     * @param array $attributes
     * @throws ReadonlyException
     */
    public static function create(array $attributes = [])
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on forceCreate
     * @param array $attributes
     * @throws ReadonlyException
     */
    public static function forceCreate(array $attributes)
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on save
     * @param array $options
     * @throws ReadonlyException
     */
    public function save(array $options = [])
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on update
     * @param array $attributes
     * @param array $options
     * @throws ReadonlyException
     */
    public function update(array $attributes = [], array $options = [])
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on firstOrCreate
     * @param  array  $attributes
     * @param  array  $values
     * @throws ReadonlyException
     */
    public static function firstOrCreate(array $attributes, array $values = [])
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on firstOrNew
     * @param  array  $attributes
     * @param  array  $values
     * @throws ReadonlyException
     */
    public static function firstOrNew(array $attributes, array $values = [])
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on updateOrCreate
     * @param  array  $attributes
     * @param  array  $values
     * @throws ReadonlyException
     */
    public static function updateOrCreate(array $attributes, array $values = [])
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on delete
     * @throws ReadonlyException
     */
    public function delete()
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on destroy
     * @param mixed $ids
     * @throws ReadonlyException
     */
    public static function destroy($ids)
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on restore
     * @throws ReadonlyException
     */
    public function restore()
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on forceDelete
     * @throws ReadonlyException
     */
    public function forceDelete()
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on performDeleteOnModel
     * @throws ReadonlyException
     */
    public function performDeleteOnModel()
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on push
     * @throws ReadonlyException
     */
    public function push()
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on finishSave
     * @param array $options
     * @throws ReadonlyException
     */
    public function finishSave(array $options)
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on performUpdate
     * @param Builder $query
     * @param array $options
     * @throws ReadonlyException
     */
    public function performUpdate(Builder $query, array $options = [])
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on touch
     * @throws ReadonlyException
     */
    public function touch()
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on insert
     * @throws ReadonlyException
     */
    public function insert()
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadonlyException on truncate
     * @throws ReadonlyException
     */
    public function truncate()
    {
        throw new ReadonlyException(__FUNCTION__, get_called_class());
    }
}
