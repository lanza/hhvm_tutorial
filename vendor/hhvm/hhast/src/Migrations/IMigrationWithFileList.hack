/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST;

interface IMigrationWithFileList {
  require extends BaseMigration;
  public function getFilePathsToMigrate(): keyset<string>;
}