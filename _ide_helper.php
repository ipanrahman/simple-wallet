<?php
// @formatter:off

/**
 * A helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel Lumen (5.7.7) (Laravel Components 5.7.*) on 2019-01-10 08:09:34.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace Illuminate\Support\Facades { 

    /**
     * 
     *
     * @method static bool attempt(array $credentials = [], bool $remember = false)
     * @method static bool once(array $credentials = [])
     * @method static void login(\Illuminate\Contracts\Auth\Authenticatable $user, bool $remember = false)
     * @method static \Illuminate\Contracts\Auth\Authenticatable loginUsingId(mixed $id, bool $remember = false)
     * @method static bool onceUsingId(mixed $id)
     * @method static bool viaRemember()
     * @method static void logout()
     * @method static \Symfony\Component\HttpFoundation\Response|null onceBasic(string $field = 'email',array $extraConditions = [])
     * @method static null|bool logoutOtherDevices(string $password, string $attribute = 'password')
     * @see \Illuminate\Auth\AuthManager
     * @see \Illuminate\Contracts\Auth\Factory
     * @see \Illuminate\Contracts\Auth\Guard
     * @see \Illuminate\Contracts\Auth\StatefulGuard
     */ 
    class Auth {
        
        /**
         * Attempt to get the guard from the local cache.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard 
         * @static 
         */ 
        public static function guard($name = null)
        {
            return \Illuminate\Auth\AuthManager::guard($name);
        }
        
        /**
         * Create a session based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */ 
        public static function createSessionDriver($name, $config)
        {
            return \Illuminate\Auth\AuthManager::createSessionDriver($name, $config);
        }
        
        /**
         * Create a token based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\TokenGuard 
         * @static 
         */ 
        public static function createTokenDriver($name, $config)
        {
            return \Illuminate\Auth\AuthManager::createTokenDriver($name, $config);
        }
        
        /**
         * Get the default authentication driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Auth\AuthManager::getDefaultDriver();
        }
        
        /**
         * Set the default guard driver the factory should serve.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function shouldUse($name)
        {
            \Illuminate\Auth\AuthManager::shouldUse($name);
        }
        
        /**
         * Set the default authentication driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Auth\AuthManager::setDefaultDriver($name);
        }
        
        /**
         * Register a new callback based request guard.
         *
         * @param string $driver
         * @param callable $callback
         * @return $this 
         * @static 
         */ 
        public static function viaRequest($driver, $callback)
        {
            return \Illuminate\Auth\AuthManager::viaRequest($driver, $callback);
        }
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function userResolver()
        {
            return \Illuminate\Auth\AuthManager::userResolver();
        }
        
        /**
         * Set the callback to be used to resolve users.
         *
         * @param \Closure $userResolver
         * @return $this 
         * @static 
         */ 
        public static function resolveUsersUsing($userResolver)
        {
            return \Illuminate\Auth\AuthManager::resolveUsersUsing($userResolver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Auth\AuthManager::extend($driver, $callback);
        }
        
        /**
         * Register a custom provider creator Closure.
         *
         * @param string $name
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function provider($name, $callback)
        {
            return \Illuminate\Auth\AuthManager::provider($name, $callback);
        }
        
        /**
         * Create the user provider implementation for the driver.
         *
         * @param string|null $provider
         * @return \Illuminate\Contracts\Auth\UserProvider|null 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function createUserProvider($provider = null)
        {
            return \Illuminate\Auth\AuthManager::createUserProvider($provider);
        }
        
        /**
         * Get the default user provider name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultUserProvider()
        {
            return \Illuminate\Auth\AuthManager::getDefaultUserProvider();
        }
        
        /**
         * Get the currently authenticated user.
         *
         * @return \App\User|null 
         * @static 
         */ 
        public static function user()
        {
            return \Illuminate\Auth\RequestGuard::user();
        }
        
        /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */ 
        public static function validate($credentials = array())
        {
            return \Illuminate\Auth\RequestGuard::validate($credentials);
        }
        
        /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return $this 
         * @static 
         */ 
        public static function setRequest($request)
        {
            return \Illuminate\Auth\RequestGuard::setRequest($request);
        }
        
        /**
         * Determine if current user is authenticated. If not, throw an exception.
         *
         * @return \App\User 
         * @throws \Illuminate\Auth\AuthenticationException
         * @static 
         */ 
        public static function authenticate()
        {
            return \Illuminate\Auth\RequestGuard::authenticate();
        }
        
        /**
         * Determine if the guard has a user instance.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasUser()
        {
            return \Illuminate\Auth\RequestGuard::hasUser();
        }
        
        /**
         * Determine if the current user is authenticated.
         *
         * @return bool 
         * @static 
         */ 
        public static function check()
        {
            return \Illuminate\Auth\RequestGuard::check();
        }
        
        /**
         * Determine if the current user is a guest.
         *
         * @return bool 
         * @static 
         */ 
        public static function guest()
        {
            return \Illuminate\Auth\RequestGuard::guest();
        }
        
        /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|null 
         * @static 
         */ 
        public static function id()
        {
            return \Illuminate\Auth\RequestGuard::id();
        }
        
        /**
         * Set the current user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @return $this 
         * @static 
         */ 
        public static function setUser($user)
        {
            return \Illuminate\Auth\RequestGuard::setUser($user);
        }
        
        /**
         * Get the user provider used by the guard.
         *
         * @return \Illuminate\Contracts\Auth\UserProvider 
         * @static 
         */ 
        public static function getProvider()
        {
            return \Illuminate\Auth\RequestGuard::getProvider();
        }
        
        /**
         * Set the user provider used by the guard.
         *
         * @param \Illuminate\Contracts\Auth\UserProvider $provider
         * @return void 
         * @static 
         */ 
        public static function setProvider($provider)
        {
            \Illuminate\Auth\RequestGuard::setProvider($provider);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Auth\RequestGuard::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Auth\RequestGuard::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Auth\RequestGuard::hasMacro($name);
        }
         
    }

    /**
     * 
     *
     * @see \Illuminate\Database\DatabaseManager
     * @see \Illuminate\Database\Connection
     */ 
    class DB {
        
        /**
         * Get a database connection instance.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function connection($name = null)
        {
            return \Illuminate\Database\DatabaseManager::connection($name);
        }
        
        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function purge($name = null)
        {
            \Illuminate\Database\DatabaseManager::purge($name);
        }
        
        /**
         * Disconnect from the given database.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function disconnect($name = null)
        {
            \Illuminate\Database\DatabaseManager::disconnect($name);
        }
        
        /**
         * Reconnect to the given database.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function reconnect($name = null)
        {
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }
        
        /**
         * Get the default connection name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultConnection()
        {
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }
        
        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultConnection($name)
        {
            \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }
        
        /**
         * Get all of the support drivers.
         *
         * @return array 
         * @static 
         */ 
        public static function supportedDrivers()
        {
            return \Illuminate\Database\DatabaseManager::supportedDrivers();
        }
        
        /**
         * Get all of the drivers that are actually available.
         *
         * @return array 
         * @static 
         */ 
        public static function availableDrivers()
        {
            return \Illuminate\Database\DatabaseManager::availableDrivers();
        }
        
        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($name, $resolver)
        {
            \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }
        
        /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */ 
        public static function getConnections()
        {
            return \Illuminate\Database\DatabaseManager::getConnections();
        }
        
        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\MySqlBuilder 
         * @static 
         */ 
        public static function getSchemaBuilder()
        {
            return \Illuminate\Database\MySqlConnection::getSchemaBuilder();
        }
        
        /**
         * Bind values to their parameters in the given statement.
         *
         * @param \PDOStatement $statement
         * @param array $bindings
         * @return void 
         * @static 
         */ 
        public static function bindValues($statement, $bindings)
        {
            \Illuminate\Database\MySqlConnection::bindValues($statement, $bindings);
        }
        
        /**
         * Set the query grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultQueryGrammar();
        }
        
        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultSchemaGrammar();
        }
        
        /**
         * Set the query post processor to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultPostProcessor();
        }
        
        /**
         * Begin a fluent query against a database table.
         *
         * @param string $table
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */ 
        public static function table($table)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::table($table);
        }
        
        /**
         * Get a new query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */ 
        public static function query()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::query();
        }
        
        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed 
         * @static 
         */ 
        public static function selectOne($query, $bindings = array(), $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectOne($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function selectFromWriteConnection($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectFromWriteConnection($query, $bindings);
        }
        
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array 
         * @static 
         */ 
        public static function select($query, $bindings = array(), $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::select($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run a select statement against the database and returns a generator.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return \Generator 
         * @static 
         */ 
        public static function cursor($query, $bindings = array(), $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::cursor($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function insert($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::insert($query, $bindings);
        }
        
        /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function update($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::update($query, $bindings);
        }
        
        /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function delete($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::delete($query, $bindings);
        }
        
        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function statement($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::statement($query, $bindings);
        }
        
        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function affectingStatement($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::affectingStatement($query, $bindings);
        }
        
        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         * @return bool 
         * @static 
         */ 
        public static function unprepared($query)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::unprepared($query);
        }
        
        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
         * @return array 
         * @static 
         */ 
        public static function pretend($callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::pretend($callback);
        }
        
        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function prepareBindings($bindings)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::prepareBindings($bindings);
        }
        
        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void 
         * @static 
         */ 
        public static function logQuery($query, $bindings, $time = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::logQuery($query, $bindings, $time);
        }
        
        /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function listen($callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::listen($callback);
        }
        
        /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression 
         * @static 
         */ 
        public static function raw($value)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::raw($value);
        }
        
        /**
         * Indicate if any records have been modified.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function recordsHaveBeenModified($value = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::recordsHaveBeenModified($value);
        }
        
        /**
         * Is Doctrine available?
         *
         * @return bool 
         * @static 
         */ 
        public static function isDoctrineAvailable()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::isDoctrineAvailable();
        }
        
        /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         * @return \Doctrine\DBAL\Schema\Column 
         * @static 
         */ 
        public static function getDoctrineColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineColumn($table, $column);
        }
        
        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager 
         * @static 
         */ 
        public static function getDoctrineSchemaManager()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineSchemaManager();
        }
        
        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection 
         * @static 
         */ 
        public static function getDoctrineConnection()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineConnection();
        }
        
        /**
         * Get the current PDO connection.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getPdo()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getPdo();
        }
        
        /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getReadPdo()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getReadPdo();
        }
        
        /**
         * Set the PDO connection.
         *
         * @param \PDO|\Closure|null $pdo
         * @return $this 
         * @static 
         */ 
        public static function setPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setPdo($pdo);
        }
        
        /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|\Closure|null $pdo
         * @return $this 
         * @static 
         */ 
        public static function setReadPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setReadPdo($pdo);
        }
        
        /**
         * Set the reconnect instance on the connection.
         *
         * @param callable $reconnector
         * @return $this 
         * @static 
         */ 
        public static function setReconnector($reconnector)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setReconnector($reconnector);
        }
        
        /**
         * Get the database connection name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getName();
        }
        
        /**
         * Get an option from the configuration options.
         *
         * @param string|null $option
         * @return mixed 
         * @static 
         */ 
        public static function getConfig($option = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getConfig($option);
        }
        
        /**
         * Get the PDO driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDriverName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDriverName();
        }
        
        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar 
         * @static 
         */ 
        public static function getQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getQueryGrammar();
        }
        
        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
         * @return $this 
         * @static 
         */ 
        public static function setQueryGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setQueryGrammar($grammar);
        }
        
        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar 
         * @static 
         */ 
        public static function getSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getSchemaGrammar();
        }
        
        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
         * @return $this 
         * @static 
         */ 
        public static function setSchemaGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setSchemaGrammar($grammar);
        }
        
        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor 
         * @static 
         */ 
        public static function getPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getPostProcessor();
        }
        
        /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor $processor
         * @return $this 
         * @static 
         */ 
        public static function setPostProcessor($processor)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setPostProcessor($processor);
        }
        
        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getEventDispatcher()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return $this 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setEventDispatcher($events);
        }
        
        /**
         * Unset the event dispatcher for this connection.
         *
         * @return void 
         * @static 
         */ 
        public static function unsetEventDispatcher()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::unsetEventDispatcher();
        }
        
        /**
         * Determine if the connection in a "dry run".
         *
         * @return bool 
         * @static 
         */ 
        public static function pretending()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::pretending();
        }
        
        /**
         * Get the connection query log.
         *
         * @return array 
         * @static 
         */ 
        public static function getQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getQueryLog();
        }
        
        /**
         * Clear the query log.
         *
         * @return void 
         * @static 
         */ 
        public static function flushQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::flushQueryLog();
        }
        
        /**
         * Enable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function enableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::enableQueryLog();
        }
        
        /**
         * Disable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function disableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::disableQueryLog();
        }
        
        /**
         * Determine whether we're logging queries.
         *
         * @return bool 
         * @static 
         */ 
        public static function logging()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::logging();
        }
        
        /**
         * Get the name of the connected database.
         *
         * @return string 
         * @static 
         */ 
        public static function getDatabaseName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDatabaseName();
        }
        
        /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return $this 
         * @static 
         */ 
        public static function setDatabaseName($database)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setDatabaseName($database);
        }
        
        /**
         * Get the table prefix for the connection.
         *
         * @return string 
         * @static 
         */ 
        public static function getTablePrefix()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getTablePrefix();
        }
        
        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return $this 
         * @static 
         */ 
        public static function setTablePrefix($prefix)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setTablePrefix($prefix);
        }
        
        /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
         * @return \Illuminate\Database\Grammar 
         * @static 
         */ 
        public static function withTablePrefix($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::withTablePrefix($grammar);
        }
        
        /**
         * Register a connection resolver.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function resolverFor($driver, $callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::resolverFor($driver, $callback);
        }
        
        /**
         * Get the connection resolver for the given driver.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function getResolver($driver)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getResolver($driver);
        }
        
        /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
         * @param int $attempts
         * @return mixed 
         * @throws \Exception|\Throwable
         * @static 
         */ 
        public static function transaction($callback, $attempts = 1)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::transaction($callback, $attempts);
        }
        
        /**
         * Start a new database transaction.
         *
         * @return void 
         * @throws \Exception
         * @static 
         */ 
        public static function beginTransaction()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::beginTransaction();
        }
        
        /**
         * Commit the active database transaction.
         *
         * @return void 
         * @static 
         */ 
        public static function commit()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::commit();
        }
        
        /**
         * Rollback the active database transaction.
         *
         * @param int|null $toLevel
         * @return void 
         * @throws \Exception
         * @static 
         */ 
        public static function rollBack($toLevel = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::rollBack($toLevel);
        }
        
        /**
         * Get the number of active transactions.
         *
         * @return int 
         * @static 
         */ 
        public static function transactionLevel()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::transactionLevel();
        }
         
    }

    /**
     * 
     *
     * @see \Illuminate\Cache\CacheManager
     * @see \Illuminate\Cache\Repository
     */ 
    class Cache {
        
        /**
         * Get a cache store instance by name.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Cache\Repository 
         * @static 
         */ 
        public static function store($name = null)
        {
            return \Illuminate\Cache\CacheManager::store($name);
        }
        
        /**
         * Get a cache driver instance.
         *
         * @param string|null $driver
         * @return \Illuminate\Contracts\Cache\Repository 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            return \Illuminate\Cache\CacheManager::driver($driver);
        }
        
        /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return \Illuminate\Cache\Repository 
         * @static 
         */ 
        public static function repository($store)
        {
            return \Illuminate\Cache\CacheManager::repository($store);
        }
        
        /**
         * Get the default cache driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Cache\CacheManager::getDefaultDriver();
        }
        
        /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Cache\CacheManager::setDefaultDriver($name);
        }
        
        /**
         * Unset the given driver instances.
         *
         * @param array|string|null $name
         * @return $this 
         * @static 
         */ 
        public static function forgetDriver($name = null)
        {
            return \Illuminate\Cache\CacheManager::forgetDriver($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Cache\CacheManager::extend($driver, $callback);
        }
        
        /**
         * Determine if an item exists in the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \Illuminate\Cache\Repository::has($key);
        }
        
        /**
         * Determine if an item doesn't exist in the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function missing($key)
        {
            return \Illuminate\Cache\Repository::missing($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            return \Illuminate\Cache\Repository::get($key, $default);
        }
        
        /**
         * Retrieve multiple items from the cache by key.
         * 
         * Items not found in the cache will have a null value.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
        public static function many($keys)
        {
            return \Illuminate\Cache\Repository::many($keys);
        }
        
        /**
         * Obtains multiple cache items by their unique keys.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of keys that can obtained in a single operation.
         * @param mixed $default Default value to return for keys that do not exist.
         * @return \Psr\SimpleCache\iterable A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
        public static function getMultiple($keys, $default = null)
        {
            return \Illuminate\Cache\Repository::getMultiple($keys, $default);
        }
        
        /**
         * Retrieve an item from the cache and delete it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
            return \Illuminate\Cache\Repository::pull($key, $default);
        }
        
        /**
         * Store an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|float|int|null $minutes
         * @return void 
         * @static 
         */ 
        public static function put($key, $value, $minutes = null)
        {
            \Illuminate\Cache\Repository::put($key, $value, $minutes);
        }
        
        /**
         * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
         *
         * @param string $key The key of the item to store.
         * @param mixed $value The value of the item to store, must be serializable.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                      the driver supports TTL then the library may set a default value
         *                                      for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
        public static function set($key, $value, $ttl = null)
        {
            return \Illuminate\Cache\Repository::set($key, $value, $ttl);
        }
        
        /**
         * Store multiple items in the cache for a given number of minutes.
         *
         * @param array $values
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return void 
         * @static 
         */ 
        public static function putMany($values, $minutes)
        {
            \Illuminate\Cache\Repository::putMany($values, $minutes);
        }
        
        /**
         * Persists a set of key => value pairs in the cache, with an optional TTL.
         *
         * @param \Psr\SimpleCache\iterable $values A list of key => value pairs for a multiple-set operation.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                       the driver supports TTL then the library may set a default value
         *                                       for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $values is neither an array nor a Traversable,
         *   or if any of the $values are not a legal value.
         * @static 
         */ 
        public static function setMultiple($values, $ttl = null)
        {
            return \Illuminate\Cache\Repository::setMultiple($values, $ttl);
        }
        
        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return bool 
         * @static 
         */ 
        public static function add($key, $value, $minutes)
        {
            return \Illuminate\Cache\Repository::add($key, $value, $minutes);
        }
        
        /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
        public static function increment($key, $value = 1)
        {
            return \Illuminate\Cache\Repository::increment($key, $value);
        }
        
        /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
        public static function decrement($key, $value = 1)
        {
            return \Illuminate\Cache\Repository::decrement($key, $value);
        }
        
        /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function forever($key, $value)
        {
            \Illuminate\Cache\Repository::forever($key, $value);
        }
        
        /**
         * Get an item from the cache, or execute the given Closure and store the result.
         *
         * @param string $key
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function remember($key, $minutes, $callback)
        {
            return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
        }
        
        /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function sear($key, $callback)
        {
            return \Illuminate\Cache\Repository::sear($key, $callback);
        }
        
        /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function rememberForever($key, $callback)
        {
            return \Illuminate\Cache\Repository::rememberForever($key, $callback);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function forget($key)
        {
            return \Illuminate\Cache\Repository::forget($key);
        }
        
        /**
         * Delete an item from the cache by its unique key.
         *
         * @param string $key The unique cache key of the item to delete.
         * @return bool True if the item was successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
        public static function delete($key)
        {
            return \Illuminate\Cache\Repository::delete($key);
        }
        
        /**
         * Deletes multiple cache items in a single operation.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of string-based keys to be deleted.
         * @return bool True if the items were successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
        public static function deleteMultiple($keys)
        {
            return \Illuminate\Cache\Repository::deleteMultiple($keys);
        }
        
        /**
         * Wipes clean the entire cache's keys.
         *
         * @return bool True on success and false on failure.
         * @static 
         */ 
        public static function clear()
        {
            return \Illuminate\Cache\Repository::clear();
        }
        
        /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param array|mixed $names
         * @return \Illuminate\Cache\TaggedCache 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function tags($names)
        {
            return \Illuminate\Cache\Repository::tags($names);
        }
        
        /**
         * Get the default cache time.
         *
         * @return float|int 
         * @static 
         */ 
        public static function getDefaultCacheTime()
        {
            return \Illuminate\Cache\Repository::getDefaultCacheTime();
        }
        
        /**
         * Set the default cache time in minutes.
         *
         * @param float|int $minutes
         * @return $this 
         * @static 
         */ 
        public static function setDefaultCacheTime($minutes)
        {
            return \Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
        }
        
        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store 
         * @static 
         */ 
        public static function getStore()
        {
            return \Illuminate\Cache\Repository::getStore();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
            \Illuminate\Cache\Repository::setEventDispatcher($events);
        }
        
        /**
         * Determine if a cached value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
            return \Illuminate\Cache\Repository::offsetExists($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
            return \Illuminate\Cache\Repository::offsetGet($key);
        }
        
        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
            \Illuminate\Cache\Repository::offsetSet($key, $value);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
            \Illuminate\Cache\Repository::offsetUnset($key);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Cache\Repository::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Cache\Repository::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Cache\Repository::hasMacro($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Illuminate\Cache\Repository::macroCall($method, $parameters);
        }
        
        /**
         * Remove all items from the cache.
         *
         * @return bool 
         * @static 
         */ 
        public static function flush()
        {
            return \Illuminate\Cache\FileStore::flush();
        }
        
        /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem 
         * @static 
         */ 
        public static function getFilesystem()
        {
            return \Illuminate\Cache\FileStore::getFilesystem();
        }
        
        /**
         * Get the working directory of the cache.
         *
         * @return string 
         * @static 
         */ 
        public static function getDirectory()
        {
            return \Illuminate\Cache\FileStore::getDirectory();
        }
        
        /**
         * Get the cache key prefix.
         *
         * @return string 
         * @static 
         */ 
        public static function getPrefix()
        {
            return \Illuminate\Cache\FileStore::getPrefix();
        }
         
    }

    /**
     * 
     *
     * @see \Illuminate\Events\Dispatcher
     */ 
    class Event {
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param string|array $events
         * @param mixed $listener
         * @return void 
         * @static 
         */ 
        public static function listen($events, $listener)
        {
            \Illuminate\Events\Dispatcher::listen($events, $listener);
        }
        
        /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         * @return bool 
         * @static 
         */ 
        public static function hasListeners($eventName)
        {
            return \Illuminate\Events\Dispatcher::hasListeners($eventName);
        }
        
        /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param array $payload
         * @return void 
         * @static 
         */ 
        public static function push($event, $payload = array())
        {
            \Illuminate\Events\Dispatcher::push($event, $payload);
        }
        
        /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @return void 
         * @static 
         */ 
        public static function flush($event)
        {
            \Illuminate\Events\Dispatcher::flush($event);
        }
        
        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @return void 
         * @static 
         */ 
        public static function subscribe($subscriber)
        {
            \Illuminate\Events\Dispatcher::subscribe($subscriber);
        }
        
        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param mixed $payload
         * @return array|null 
         * @static 
         */ 
        public static function until($event, $payload = array())
        {
            return \Illuminate\Events\Dispatcher::until($event, $payload);
        }
        
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */ 
        public static function fire($event, $payload = array(), $halt = false)
        {
            return \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
        }
        
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */ 
        public static function dispatch($event, $payload = array(), $halt = false)
        {
            return \Illuminate\Events\Dispatcher::dispatch($event, $payload, $halt);
        }
        
        /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         * @return array 
         * @static 
         */ 
        public static function getListeners($eventName)
        {
            return \Illuminate\Events\Dispatcher::getListeners($eventName);
        }
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param \Closure|string $listener
         * @param bool $wildcard
         * @return \Closure 
         * @static 
         */ 
        public static function makeListener($listener, $wildcard = false)
        {
            return \Illuminate\Events\Dispatcher::makeListener($listener, $wildcard);
        }
        
        /**
         * Create a class based listener using the IoC container.
         *
         * @param string $listener
         * @param bool $wildcard
         * @return \Closure 
         * @static 
         */ 
        public static function createClassListener($listener, $wildcard = false)
        {
            return \Illuminate\Events\Dispatcher::createClassListener($listener, $wildcard);
        }
        
        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @return void 
         * @static 
         */ 
        public static function forget($event)
        {
            \Illuminate\Events\Dispatcher::forget($event);
        }
        
        /**
         * Forget all of the pushed listeners.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetPushed()
        {
            \Illuminate\Events\Dispatcher::forgetPushed();
        }
        
        /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
         * @return $this 
         * @static 
         */ 
        public static function setQueueResolver($resolver)
        {
            return \Illuminate\Events\Dispatcher::setQueueResolver($resolver);
        }
        
        /**
         * Assert if an event was dispatched based on a truth-test callback.
         *
         * @param string $event
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertDispatched($event, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\EventFake::assertDispatched($event, $callback);
        }
        
        /**
         * Assert if a event was dispatched a number of times.
         *
         * @param string $event
         * @param int $times
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedTimes($event, $times = 1)
        {
            \Illuminate\Support\Testing\Fakes\EventFake::assertDispatchedTimes($event, $times);
        }
        
        /**
         * Determine if an event was dispatched based on a truth-test callback.
         *
         * @param string $event
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotDispatched($event, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\EventFake::assertNotDispatched($event, $callback);
        }
        
        /**
         * Get all of the events matching a truth-test callback.
         *
         * @param string $event
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function dispatched($event, $callback = null)
        {
            return \Illuminate\Support\Testing\Fakes\EventFake::dispatched($event, $callback);
        }
        
        /**
         * Determine if the given event has been dispatched.
         *
         * @param string $event
         * @return bool 
         * @static 
         */ 
        public static function hasDispatched($event)
        {
            return \Illuminate\Support\Testing\Fakes\EventFake::hasDispatched($event);
        }
         
    }

    /**
     * 
     *
     * @see \Illuminate\Log\Logger
     */ 
    class Log {
        
        /**
         * Adds a log record at the DEBUG level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return bool Whether the record has been processed
         * @static 
         */ 
        public static function debug($message, $context = array())
        {
            return \Monolog\Logger::addDebug($message, $context);
        }
        
        /**
         * Adds a log record at the INFO level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return bool Whether the record has been processed
         * @static 
         */ 
        public static function info($message, $context = array())
        {
            return \Monolog\Logger::addInfo($message, $context);
        }
        
        /**
         * Adds a log record at the NOTICE level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return bool Whether the record has been processed
         * @static 
         */ 
        public static function notice($message, $context = array())
        {
            return \Monolog\Logger::addNotice($message, $context);
        }
        
        /**
         * Adds a log record at the WARNING level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return bool Whether the record has been processed
         * @static 
         */ 
        public static function warning($message, $context = array())
        {
            return \Monolog\Logger::addWarning($message, $context);
        }
        
        /**
         * Adds a log record at the ERROR level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return bool Whether the record has been processed
         * @static 
         */ 
        public static function error($message, $context = array())
        {
            return \Monolog\Logger::addError($message, $context);
        }
        
        /**
         * Adds a log record at the CRITICAL level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return bool Whether the record has been processed
         * @static 
         */ 
        public static function critical($message, $context = array())
        {
            return \Monolog\Logger::addCritical($message, $context);
        }
        
        /**
         * Adds a log record at the ALERT level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return bool Whether the record has been processed
         * @static 
         */ 
        public static function alert($message, $context = array())
        {
            return \Monolog\Logger::addAlert($message, $context);
        }
        
        /**
         * Adds a log record at the EMERGENCY level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return bool Whether the record has been processed
         * @static 
         */ 
        public static function emergency($message, $context = array())
        {
            return \Monolog\Logger::addEmergency($message, $context);
        }
        
        /**
         * Create a new, on-demand aggregate logger instance.
         *
         * @param array $channels
         * @param string|null $channel
         * @return \Psr\Log\LoggerInterface 
         * @static 
         */ 
        public static function stack($channels, $channel = null)
        {
            return \Illuminate\Log\LogManager::stack($channels, $channel);
        }
        
        /**
         * Get a log channel instance.
         *
         * @param string|null $channel
         * @return mixed 
         * @static 
         */ 
        public static function channel($channel = null)
        {
            return \Illuminate\Log\LogManager::channel($channel);
        }
        
        /**
         * Get a log driver instance.
         *
         * @param string|null $driver
         * @return mixed 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            return \Illuminate\Log\LogManager::driver($driver);
        }
        
        /**
         * Get the default log driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Log\LogManager::getDefaultDriver();
        }
        
        /**
         * Set the default log driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Log\LogManager::setDefaultDriver($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Log\LogManager::extend($driver, $callback);
        }
        
        /**
         * Logs with an arbitrary level.
         *
         * @param mixed $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function log($level, $message, $context = array())
        {
            \Illuminate\Log\LogManager::log($level, $message, $context);
        }
         
    }

    /**
     * 
     *
     * @see \Illuminate\Queue\QueueManager
     * @see \Illuminate\Queue\Queue
     */ 
    class Queue {
        
        /**
         * Register an event listener for the before job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function before($callback)
        {
            \Illuminate\Queue\QueueManager::before($callback);
        }
        
        /**
         * Register an event listener for the after job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function after($callback)
        {
            \Illuminate\Queue\QueueManager::after($callback);
        }
        
        /**
         * Register an event listener for the exception occurred job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function exceptionOccurred($callback)
        {
            \Illuminate\Queue\QueueManager::exceptionOccurred($callback);
        }
        
        /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function looping($callback)
        {
            \Illuminate\Queue\QueueManager::looping($callback);
        }
        
        /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function failing($callback)
        {
            \Illuminate\Queue\QueueManager::failing($callback);
        }
        
        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function stopping($callback)
        {
            \Illuminate\Queue\QueueManager::stopping($callback);
        }
        
        /**
         * Determine if the driver is connected.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function connected($name = null)
        {
            return \Illuminate\Queue\QueueManager::connected($name);
        }
        
        /**
         * Resolve a queue connection instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Queue\Queue 
         * @static 
         */ 
        public static function connection($name = null)
        {
            return \Illuminate\Queue\QueueManager::connection($name);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($driver, $resolver)
        {
            \Illuminate\Queue\QueueManager::extend($driver, $resolver);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function addConnector($driver, $resolver)
        {
            \Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
        }
        
        /**
         * Get the name of the default queue connection.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Queue\QueueManager::getDefaultDriver();
        }
        
        /**
         * Set the name of the default queue connection.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Queue\QueueManager::setDefaultDriver($name);
        }
        
        /**
         * Get the full name for the given connection.
         *
         * @param string $connection
         * @return string 
         * @static 
         */ 
        public static function getName($connection = null)
        {
            return \Illuminate\Queue\QueueManager::getName($connection);
        }
        
        /**
         * Determine if the application is in maintenance mode.
         *
         * @return bool 
         * @static 
         */ 
        public static function isDownForMaintenance()
        {
            return \Illuminate\Queue\QueueManager::isDownForMaintenance();
        }
        
        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string $job
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertPushed($job, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertPushed($job, $callback);
        }
        
        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string $queue
         * @param string $job
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertPushedOn($queue, $job, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertPushedOn($queue, $job, $callback);
        }
        
        /**
         * Assert if a job was pushed with chained jobs based on a truth-test callback.
         *
         * @param string $job
         * @param array $expectedChain
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertPushedWithChain($job, $expectedChain = array(), $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertPushedWithChain($job, $expectedChain, $callback);
        }
        
        /**
         * Determine if a job was pushed based on a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotPushed($job, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertNotPushed($job, $callback);
        }
        
        /**
         * Assert that no jobs were pushed.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingPushed()
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertNothingPushed();
        }
        
        /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function pushed($job, $callback = null)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::pushed($job, $callback);
        }
        
        /**
         * Determine if there are any stored jobs for a given class.
         *
         * @param string $job
         * @return bool 
         * @static 
         */ 
        public static function hasPushed($job)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::hasPushed($job);
        }
        
        /**
         * Get the size of the queue.
         *
         * @param string $queue
         * @return int 
         * @static 
         */ 
        public static function size($queue = null)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::size($queue);
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */ 
        public static function push($job, $data = '', $queue = null)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::push($job, $data, $queue);
        }
        
        /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param string $queue
         * @param array $options
         * @return mixed 
         * @static 
         */ 
        public static function pushRaw($payload, $queue = null, $options = array())
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::pushRaw($payload, $queue, $options);
        }
        
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param \DateTime|int $delay
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */ 
        public static function later($delay, $job, $data = '', $queue = null)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::later($delay, $job, $data, $queue);
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string $queue
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */ 
        public static function pushOn($queue, $job, $data = '')
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::pushOn($queue, $job, $data);
        }
        
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param string $queue
         * @param \DateTime|int $delay
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */ 
        public static function laterOn($queue, $delay, $job, $data = '')
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::laterOn($queue, $delay, $job, $data);
        }
        
        /**
         * Pop the next job off of the queue.
         *
         * @param string $queue
         * @return \Illuminate\Contracts\Queue\Job|null 
         * @static 
         */ 
        public static function pop($queue = null)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::pop($queue);
        }
        
        /**
         * Push an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */ 
        public static function bulk($jobs, $data = '', $queue = null)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::bulk($jobs, $data, $queue);
        }
        
        /**
         * Get the connection name for the queue.
         *
         * @return string 
         * @static 
         */ 
        public static function getConnectionName()
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::getConnectionName();
        }
        
        /**
         * Set the connection name for the queue.
         *
         * @param string $name
         * @return $this 
         * @static 
         */ 
        public static function setConnectionName($name)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::setConnectionName($name);
        }
        
        /**
         * Get the expiration timestamp for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed 
         * @static 
         */ 
        public static function getJobExpiration($job)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::getJobExpiration($job);
        }
        
        /**
         * Register a callback to be executed when creating job payloads.
         *
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function createPayloadUsing($callback)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::createPayloadUsing($callback);
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @return void 
         * @static 
         */ 
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::setContainer($container);
        }
         
    }

    /**
     * 
     *
     * @see \Illuminate\Database\Schema\Builder
     */ 
    class Schema {
        
        /**
         * Determine if the given table exists.
         *
         * @param string $table
         * @return bool 
         * @static 
         */ 
        public static function hasTable($table)
        {
            return \Illuminate\Database\Schema\MySqlBuilder::hasTable($table);
        }
        
        /**
         * Get the column listing for a given table.
         *
         * @param string $table
         * @return array 
         * @static 
         */ 
        public static function getColumnListing($table)
        {
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnListing($table);
        }
        
        /**
         * Drop all tables from the database.
         *
         * @return void 
         * @static 
         */ 
        public static function dropAllTables()
        {
            \Illuminate\Database\Schema\MySqlBuilder::dropAllTables();
        }
        
        /**
         * Drop all views from the database.
         *
         * @return void 
         * @static 
         */ 
        public static function dropAllViews()
        {
            \Illuminate\Database\Schema\MySqlBuilder::dropAllViews();
        }
        
        /**
         * Set the default string length for migrations.
         *
         * @param int $length
         * @return void 
         * @static 
         */ 
        public static function defaultStringLength($length)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::defaultStringLength($length);
        }
        
        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @return bool 
         * @static 
         */ 
        public static function hasColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumn($table, $column);
        }
        
        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array $columns
         * @return bool 
         * @static 
         */ 
        public static function hasColumns($table, $columns)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumns($table, $columns);
        }
        
        /**
         * Get the data type for the given column name.
         *
         * @param string $table
         * @param string $column
         * @return string 
         * @static 
         */ 
        public static function getColumnType($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnType($table, $column);
        }
        
        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function table($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::table($table, $callback);
        }
        
        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function create($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::create($table, $callback);
        }
        
        /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @return void 
         * @static 
         */ 
        public static function drop($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::drop($table);
        }
        
        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @return void 
         * @static 
         */ 
        public static function dropIfExists($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::dropIfExists($table);
        }
        
        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @return void 
         * @static 
         */ 
        public static function rename($from, $to)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::rename($from, $to);
        }
        
        /**
         * Enable foreign key constraints.
         *
         * @return bool 
         * @static 
         */ 
        public static function enableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::enableForeignKeyConstraints();
        }
        
        /**
         * Disable foreign key constraints.
         *
         * @return bool 
         * @static 
         */ 
        public static function disableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::disableForeignKeyConstraints();
        }
        
        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function getConnection()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getConnection();
        }
        
        /**
         * Set the database connection instance.
         *
         * @param \Illuminate\Database\Connection $connection
         * @return $this 
         * @static 
         */ 
        public static function setConnection($connection)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::setConnection($connection);
        }
        
        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function blueprintResolver($resolver)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::blueprintResolver($resolver);
        }
         
    }

    /**
     * 
     *
     * @see \Illuminate\Filesystem\FilesystemManager
     */ 
    class Storage {
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function drive($name = null)
        {
            return \Illuminate\Filesystem\FilesystemManager::drive($name);
        }
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function disk($name = null)
        {
            return \Illuminate\Filesystem\FilesystemManager::disk($name);
        }
        
        /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function cloud()
        {
            return \Illuminate\Filesystem\FilesystemManager::cloud();
        }
        
        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createLocalDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createLocalDriver($config);
        }
        
        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createFtpDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createFtpDriver($config);
        }
        
        /**
         * Create an instance of the sftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createSftpDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createSftpDriver($config);
        }
        
        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */ 
        public static function createS3Driver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createS3Driver($config);
        }
        
        /**
         * Create an instance of the Rackspace driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */ 
        public static function createRackspaceDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createRackspaceDriver($config);
        }
        
        /**
         * Set the given disk instance.
         *
         * @param string $name
         * @param mixed $disk
         * @return $this 
         * @static 
         */ 
        public static function set($name, $disk)
        {
            return \Illuminate\Filesystem\FilesystemManager::set($name, $disk);
        }
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Filesystem\FilesystemManager::getDefaultDriver();
        }
        
        /**
         * Get the default cloud driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultCloudDriver()
        {
            return \Illuminate\Filesystem\FilesystemManager::getDefaultCloudDriver();
        }
        
        /**
         * Unset the given disk instances.
         *
         * @param array|string $disk
         * @return $this 
         * @static 
         */ 
        public static function forgetDisk($disk)
        {
            return \Illuminate\Filesystem\FilesystemManager::forgetDisk($disk);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Filesystem\FilesystemManager::extend($driver, $callback);
        }
        
        /**
         * Assert that the given file exists.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function assertExists($path)
        {
            \Illuminate\Filesystem\FilesystemAdapter::assertExists($path);
        }
        
        /**
         * Assert that the given file does not exist.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function assertMissing($path)
        {
            \Illuminate\Filesystem\FilesystemAdapter::assertMissing($path);
        }
        
        /**
         * Determine if a file exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function exists($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::exists($path);
        }
        
        /**
         * Get the full path for the file at the given "short" path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function path($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::path($path);
        }
        
        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function get($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::get($path);
        }
        
        /**
         * Create a streamed response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function response($path, $name = null, $headers = array(), $disposition = 'inline')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::response($path, $name, $headers, $disposition);
        }
        
        /**
         * Create a streamed download response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function download($path, $name = null, $headers = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::download($path, $name, $headers);
        }
        
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string|resource $contents
         * @param mixed $options
         * @return bool 
         * @static 
         */ 
        public static function put($path, $contents, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::put($path, $contents, $options);
        }
        
        /**
         * Store the uploaded file on the disk.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile $file
         * @param array $options
         * @return string|false 
         * @static 
         */ 
        public static function putFile($path, $file, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::putFile($path, $file, $options);
        }
        
        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile $file
         * @param string $name
         * @param array $options
         * @return string|false 
         * @static 
         */ 
        public static function putFileAs($path, $file, $name, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::putFileAs($path, $file, $name, $options);
        }
        
        /**
         * Get the visibility for the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function getVisibility($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getVisibility($path);
        }
        
        /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
         * @return bool 
         * @static 
         */ 
        public static function setVisibility($path, $visibility)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::setVisibility($path, $visibility);
        }
        
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool 
         * @static 
         */ 
        public static function prepend($path, $data, $separator = '')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::prepend($path, $data, $separator);
        }
        
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool 
         * @static 
         */ 
        public static function append($path, $data, $separator = '')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::append($path, $data, $separator);
        }
        
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */ 
        public static function delete($paths)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::delete($paths);
        }
        
        /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool 
         * @static 
         */ 
        public static function copy($from, $to)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::copy($from, $to);
        }
        
        /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool 
         * @static 
         */ 
        public static function move($from, $to)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::move($from, $to);
        }
        
        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function size($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::size($path);
        }
        
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */ 
        public static function mimeType($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::mimeType($path);
        }
        
        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function lastModified($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::lastModified($path);
        }
        
        /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function url($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::url($path);
        }
        
        /**
         * Get a resource to read the file.
         *
         * @param string $path
         * @return resource|null The path resource or null on failure.
         * @throws FileNotFoundException
         * @static 
         */ 
        public static function readStream($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::readStream($path);
        }
        
        /**
         * Write a new file using a stream.
         *
         * @param string $path
         * @param resource $resource
         * @param array $options
         * @return bool 
         * @throws \InvalidArgumentException If $resource is not a file handle.
         * @throws FileExistsException
         * @static 
         */ 
        public static function writeStream($path, $resource, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::writeStream($path, $resource, $options);
        }
        
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function temporaryUrl($path, $expiration, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::temporaryUrl($path, $expiration, $options);
        }
        
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param \League\Flysystem\AwsS3v3\AwsS3Adapter $adapter
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function getAwsTemporaryUrl($adapter, $path, $expiration, $options)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getAwsTemporaryUrl($adapter, $path, $expiration, $options);
        }
        
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param \League\Flysystem\Rackspace\RackspaceAdapter $adapter
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function getRackspaceTemporaryUrl($adapter, $path, $expiration, $options)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getRackspaceTemporaryUrl($adapter, $path, $expiration, $options);
        }
        
        /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array 
         * @static 
         */ 
        public static function files($directory = null, $recursive = false)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::files($directory, $recursive);
        }
        
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
         * @return array 
         * @static 
         */ 
        public static function allFiles($directory = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::allFiles($directory);
        }
        
        /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array 
         * @static 
         */ 
        public static function directories($directory = null, $recursive = false)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::directories($directory, $recursive);
        }
        
        /**
         * Get all (recursive) of the directories within a given directory.
         *
         * @param string|null $directory
         * @return array 
         * @static 
         */ 
        public static function allDirectories($directory = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::allDirectories($directory);
        }
        
        /**
         * Create a directory.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function makeDirectory($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::makeDirectory($path);
        }
        
        /**
         * Recursively delete a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function deleteDirectory($directory)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::deleteDirectory($directory);
        }
        
        /**
         * Flush the Flysystem cache.
         *
         * @return void 
         * @static 
         */ 
        public static function flushCache()
        {
            \Illuminate\Filesystem\FilesystemAdapter::flushCache();
        }
        
        /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemInterface 
         * @static 
         */ 
        public static function getDriver()
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getDriver();
        }
         
    }

    /**
     * 
     *
     * @see \Illuminate\Validation\Factory
     */ 
    class Validator {
        
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return \Illuminate\Validation\Validator 
         * @static 
         */ 
        public static function make($data, $rules, $messages = array(), $customAttributes = array())
        {
            return \Illuminate\Validation\Factory::make($data, $rules, $messages, $customAttributes);
        }
        
        /**
         * Validate the given data against the provided rules.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return array 
         * @throws \Illuminate\Validation\ValidationException
         * @static 
         */ 
        public static function validate($data, $rules, $messages = array(), $customAttributes = array())
        {
            return \Illuminate\Validation\Factory::validate($data, $rules, $messages, $customAttributes);
        }
        
        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
        public static function extend($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extend($rule, $extension, $message);
        }
        
        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
        public static function extendImplicit($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extendImplicit($rule, $extension, $message);
        }
        
        /**
         * Register a custom dependent validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
        public static function extendDependent($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extendDependent($rule, $extension, $message);
        }
        
        /**
         * Register a custom validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         * @return void 
         * @static 
         */ 
        public static function replacer($rule, $replacer)
        {
            \Illuminate\Validation\Factory::replacer($rule, $replacer);
        }
        
        /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function resolver($resolver)
        {
            \Illuminate\Validation\Factory::resolver($resolver);
        }
        
        /**
         * Get the Translator implementation.
         *
         * @return \Illuminate\Contracts\Translation\Translator 
         * @static 
         */ 
        public static function getTranslator()
        {
            return \Illuminate\Validation\Factory::getTranslator();
        }
        
        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface 
         * @static 
         */ 
        public static function getPresenceVerifier()
        {
            return \Illuminate\Validation\Factory::getPresenceVerifier();
        }
        
        /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
         * @return void 
         * @static 
         */ 
        public static function setPresenceVerifier($presenceVerifier)
        {
            \Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
        }
         
    }

    /**
     * 
     *
     * @see \Illuminate\Contracts\Auth\Access\Gate
     */ 
    class Gate {
        
        /**
         * Determine if a given ability has been defined.
         *
         * @param string|array $ability
         * @return bool 
         * @static 
         */ 
        public static function has($ability)
        {
            return \Illuminate\Auth\Access\Gate::has($ability);
        }
        
        /**
         * Define a new ability.
         *
         * @param string $ability
         * @param callable|string $callback
         * @return $this 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function define($ability, $callback)
        {
            return \Illuminate\Auth\Access\Gate::define($ability, $callback);
        }
        
        /**
         * Define abilities for a resource.
         *
         * @param string $name
         * @param string $class
         * @param array|null $abilities
         * @return $this 
         * @static 
         */ 
        public static function resource($name, $class, $abilities = null)
        {
            return \Illuminate\Auth\Access\Gate::resource($name, $class, $abilities);
        }
        
        /**
         * Define a policy class for a given class type.
         *
         * @param string $class
         * @param string $policy
         * @return $this 
         * @static 
         */ 
        public static function policy($class, $policy)
        {
            return \Illuminate\Auth\Access\Gate::policy($class, $policy);
        }
        
        /**
         * Register a callback to run before all Gate checks.
         *
         * @param callable $callback
         * @return $this 
         * @static 
         */ 
        public static function before($callback)
        {
            return \Illuminate\Auth\Access\Gate::before($callback);
        }
        
        /**
         * Register a callback to run after all Gate checks.
         *
         * @param callable $callback
         * @return $this 
         * @static 
         */ 
        public static function after($callback)
        {
            return \Illuminate\Auth\Access\Gate::after($callback);
        }
        
        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function allows($ability, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::allows($ability, $arguments);
        }
        
        /**
         * Determine if the given ability should be denied for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function denies($ability, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::denies($ability, $arguments);
        }
        
        /**
         * Determine if all of the given abilities should be granted for the current user.
         *
         * @param \Illuminate\Auth\Access\iterable|string $abilities
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function check($abilities, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::check($abilities, $arguments);
        }
        
        /**
         * Determine if any one of the given abilities should be granted for the current user.
         *
         * @param \Illuminate\Auth\Access\iterable|string $abilities
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function any($abilities, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::any($abilities, $arguments);
        }
        
        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return \Illuminate\Auth\Access\Response 
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static 
         */ 
        public static function authorize($ability, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::authorize($ability, $arguments);
        }
        
        /**
         * Get the raw result from the authorization callback.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return mixed 
         * @static 
         */ 
        public static function raw($ability, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::raw($ability, $arguments);
        }
        
        /**
         * Get a policy instance for a given class.
         *
         * @param object|string $class
         * @return mixed 
         * @static 
         */ 
        public static function getPolicyFor($class)
        {
            return \Illuminate\Auth\Access\Gate::getPolicyFor($class);
        }
        
        /**
         * Build a policy class instance of the given type.
         *
         * @param object|string $class
         * @return mixed 
         * @static 
         */ 
        public static function resolvePolicy($class)
        {
            return \Illuminate\Auth\Access\Gate::resolvePolicy($class);
        }
        
        /**
         * Get a gate instance for the given user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable|mixed $user
         * @return static 
         * @static 
         */ 
        public static function forUser($user)
        {
            return \Illuminate\Auth\Access\Gate::forUser($user);
        }
        
        /**
         * Get all of the defined abilities.
         *
         * @return array 
         * @static 
         */ 
        public static function abilities()
        {
            return \Illuminate\Auth\Access\Gate::abilities();
        }
        
        /**
         * Get all of the defined policies.
         *
         * @return array 
         * @static 
         */ 
        public static function policies()
        {
            return \Illuminate\Auth\Access\Gate::policies();
        }
         
    }
 
}


namespace  { 

    class Auth extends \Illuminate\Support\Facades\Auth {}

    class DB extends \Illuminate\Support\Facades\DB {}

    class Cache extends \Illuminate\Support\Facades\Cache {}

    class Event extends \Illuminate\Support\Facades\Event {}

    class Log extends \Illuminate\Support\Facades\Log {}

    class Queue extends \Illuminate\Support\Facades\Queue {}

    class Schema extends \Illuminate\Support\Facades\Schema {}

    class Storage extends \Illuminate\Support\Facades\Storage {}

    class Validator extends \Illuminate\Support\Facades\Validator {}

    class Gate extends \Illuminate\Support\Facades\Gate {}
 
}



