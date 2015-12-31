<?php

namespace Message;

use Request\Request;

interface MessageInterface
{
    /**
     * Add a row of message data into database;
     * @param Request $request
     * @return \Boolean $isAdded
     * @throw MessageException
     */
    public function add(Request $request);

    /**
     * Update a row of message data in the database;
     * @param Request $request
     * @return \Boolean $isUpdated
     * @throw MessageException
     */
    public function update(Request $request);

    /**
     * Remove a row of message in the database
     * @param Request $request
     * @return \Boolean $isRemoved
     * @throw MessageException
     */
    public function remove(Request $request);
}