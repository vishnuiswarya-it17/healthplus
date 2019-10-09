package org.folio.services.validator.engine;

import io.vertx.codegen.annotations.ProxyGen;
import io.vertx.core.AsyncResult;
import io.vertx.core.Handler;
import io.vertx.core.Vertx;
import io.vertx.core.json.JsonObject;

import java.util.Map;


/**
 * The root interface for validation engine implementations.
 * The main concept is to validate incoming password.
 */
@ProxyGen
public interface ValidationEngineService {


  static ValidationEngineService create(Vertx vertx) {
    return new ValidationEngineServiceImpl(vertx);
  }

  /**
   * Creates proxy instance that helps to push message into the message queue
   *
   * @param vertx   vertx instance
   * @param address host address
   * @return ValidationEngineService instance
   */
  static ValidationEngineService createProxy(Vertx vertx, String address) {
    return new ValidationEngineServiceVertxEBProxy(vertx, address);
  }

  /**
   * Performs received password validation
   *
   * @param password      received password
   * @param headers       request headers needed for access backend FOLIO services to perform programmatic rules validation
   * @param resultHandler handler with validation results in format <Result, Messages>
   */
  void validatePassword(String userId, String password, Map<String, String> headers,
                        Handler<AsyncResult<JsonObject>> resultHandler);
}
